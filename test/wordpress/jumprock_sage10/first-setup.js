#!/usr/bin/env node

const inquirer = require("inquirer");
require('dotenv').config();
const exec = require('await-exec')

const askQuestions = () => {
  const questions = [
    {
      name: "name",
      type: "input",
      message: "Inserisci il nome del sito web che stai per creare "
    },
    {
        name: "email",
        type: "input",
        message: "Inserisci la tua email ",
    }
  ];
  return inquirer.prompt(questions);
};

const askEmail = () => {
  const email = [
    {
        name: "email",
        type: "input",
        message: "Inserisci la tua email ",
    }
  ];
  return inquirer.prompt(email);
};

const run = async () => {

  const app_name = process.env.APP_NAME;
  const result = await exec("docker exec " + app_name + "-wordpress wp --allow-root core is-installed; echo $?");

  if (result.stdout == 1) {

    // ask questions
    const answers = await askQuestions();
    const { name, email} = answers;

    var nickname =  email.split('@')[0];

    while (!nickname.includes('.')){
      console.log("L'email inserita non è una mail personale! \n");
      const array = await askEmail();
      const { email } = array;

      nickname = email.split('@')[0];
    }

    const correct_name = name.split(' ').join('_');
    var password = Math.random().toString(36).slice(-8);
    const url = process.env.APP_NAME + ".test";

    if(process.env.WP_ALLOW_MULTISITE){
      await exec("docker exec " + app_name + "-wordpress wp --allow-root core multisite-install --url=" + url + " --title="+ correct_name + " --admin_user=" + nickname + " --admin_password=" + password + " --admin_email=" + email);
    }else{
      await exec("docker exec " + app_name + "-wordpress wp --allow-root core install --url=" + url + " --title="+ correct_name + " --admin_user=" + nickname + " --admin_password=" + password + " --admin_email=" + email);
    }

    console.log("Il tuo sito wordpress è stato creato e la tua password sarà: " + password);

  }else{

    console.log("Il sito wordpress è già installato!!");
    
  }

};

run();