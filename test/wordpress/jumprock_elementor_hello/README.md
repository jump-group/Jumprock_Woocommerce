# JUMPROCK_ELEMENTOR_HELLO
## _Boilerplates Repository for sites that need to use Elementor and theme Hello_

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

Repository for sites that need to use Elementor and the theme Hello. Includes also Envato Elements to unlock other features.

## Installation
Fork that repository in a new repo with name sitename-wp-2021 in the subgroup sites and remove fork Relationship. 

Clone that repository:

```sh
git clone git@gitlab.com:jump-group/sites/sitename-wp-2021.git sitename
cd sitename
```

Open Visual Studio Code in this repository
```sh
code .
```

Change all jumprock-elementor occurrences to sitename

Install the dependencies and devDependencies and start the server.

```sh
yarn repo-setup
```

Start using the repo:

```sh
yarn start
```

## Commands
This is a list of all possible commands in the repo:

| Command | Usage|
| ------ | ------ |
| yarn env-install | Create .env in the repo like .env.example |
| yarn postinstall | Create config for node version |
| yarn insert-host | Insert the new site in your host file |
| yarn kill-all-docker | Kill all docker containers|
| yarn start | Start docker container and run project|
| yarn recreate | Recreate Docker Containter and restart project  |
| yarn generate-certificate | Generate certificate for ssl in local environment  |
| yarn repo-setup | Setup the repo  |

## Docker

Jumprock Elementor is very easy to install and run in a Docker container.

By default, the Docker will expose port 443, so change this within the
Dockerfile if necessary. When ready, simply use the Dockerfile to
build the image.

```sh
yarn repo-setup
```

This will create the Jumprock Elementor image and pull in the necessary dependencies.

Once done, run the Docker image.

```sh
yarn start
```

Verify the deployment by navigating to your server address in
your preferred browser.

```sh
jumprock_elementor.test
```

In locale, per le modifiche allo stile bisogna attivare l'estensione di VS Code [Live Sass Compiler](https://marketplace.visualstudio.com/items?itemName=glenn2223.live-sass)

Sono necessarie le seguenti impostazioni del plugin in **settings.json**

```
  "liveSassCompile.settings.formats": [
    {
      "savePath": "/web/app/themes/hello-theme-child/css/",
      "format": "expanded",
      "extensionName": ".css"
    },
    {
      "savePath": "/web/app/themes/hello-theme-child/css/",
      "format": "compressed",
      "extensionName": ".min.css"
    }
  ],
  "liveSassCompile.settings.includeItems": [
    "/web/app/themes/hello-theme-child/*.sass",
    "/web/app/themes/hello-theme-child/*.scss"
  ],
```
## License

MIT

**Free Software, Hell Yeah!**

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)

   [dill]: <https://github.com/joemccann/dillinger>
   [git-repo-url]: <https://github.com/joemccann/dillinger.git>
   [john gruber]: <http://daringfireball.net>
   [df1]: <http://daringfireball.net/projects/markdown/>
   [markdown-it]: <https://github.com/markdown-it/markdown-it>
   [Ace Editor]: <http://ace.ajax.org>
   [node.js]: <http://nodejs.org>
   [Twitter Bootstrap]: <http://twitter.github.com/bootstrap/>
   [jQuery]: <http://jquery.com>
   [@tjholowaychuk]: <http://twitter.com/tjholowaychuk>
   [express]: <http://expressjs.com>
   [AngularJS]: <http://angularjs.org>
   [Gulp]: <http://gulpjs.com>

   [PlDb]: <https://github.com/joemccann/dillinger/tree/master/plugins/dropbox/README.md>
   [PlGh]: <https://github.com/joemccann/dillinger/tree/master/plugins/github/README.md>
   [PlGd]: <https://github.com/joemccann/dillinger/tree/master/plugins/googledrive/README.md>
   [PlOd]: <https://github.com/joemccann/dillinger/tree/master/plugins/onedrive/README.md>
   [PlMe]: <https://github.com/joemccann/dillinger/tree/master/plugins/medium/README.md>
   [PlGa]: <https://github.com/RahulHP/dillinger/blob/master/plugins/googleanalytics/README.md>

