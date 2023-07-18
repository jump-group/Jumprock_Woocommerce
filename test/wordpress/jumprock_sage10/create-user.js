#!/usr/bin/env node

const inquirer = require("inquirer");
require('dotenv').config();
const exec = require('await-exec')

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

  if (result.stdout != 1) {

    // ask questions
    const answers = await askEmail();
    const { email } = answers;

    var nickname =  email.split('@')[0];

    while (!nickname.includes('.')){
      console.log("L'email inserita non è una mail personale! \n");
      const array = await askEmail();
      const { email } = array;

      nickname = email.split('@')[0];
    }

    var password = Math.random().toString(36).slice(-8);

    await exec("docker exec " + app_name + "-wordpress wp --allow-root user create " + nickname + " " + email + " --role=administrator --user_pass=" + password);

    console.log("Il tuo utente wordpress è stato creato e la tua password sarà: " + password);

  }else{

    console.log("Il sito wordpress non è ancora stato installato!!");
    
  }

};

run();