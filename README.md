# PHP-SKELETON

PHP-Skeleton is a MVC skeleton application based on Slim Framework (http://www.slimframework.com/). This project
was inspired by **php-mvc** (https://github.com/panique/php-mvc/). 
PHP-Skeleton is a bundling of the following components. 

* **Model**: idiorm ([j4mie/idiorm](https://github.com/j4mie/idiorm))
* **View**: Twig ([fabpot/Twig](https://github.com/fabpot/Twig))
* **Controller/Routing**: Slim ([codeguy/Slim](https://github.com/codeguy/Slim))
* **Debugging**: Kint ([raveren/kint](https://github.com/raveren/kint))

## Why does this project exist ?

One of the biggest question in the PHP world is "How do I build an application ?".
It's hard to find a good base, a good file structure and useful information on that, but at the same time
there are masses of frameworks that might be really good, but really hard to understand, hard to use and extremely
complex. This project tries to be some kind of naked skeleton bare-bone for quick application building.

##Structure

* **application/** contains all files for your app: `models/`, `routers/`, `views/` (Twig templates), `libs/` (Internal libraries) and your `config/` (configuration).
* **data/** contains data such as cache and uploads.
* **public/** is for your assets: js/css/img files.
* **vendor/** contains the external libraries for your application. (Used for Composer)

## Installation

1. This project manages its dependencies with [Composer](http://getcomposer.org/).
Start by installing Composer:

        curl -s http://getcomposer.org/installer | php

2. Create project skeleton:

        php composer.phar create-project imjching/php-skeleton

3. Start developing your own project by creating new files in `src` and
searching for libraries on [Packagist](http://packagist.org)

## License

This project is licensed under the MIT License.
This means you can use and modify it for free in private or commercial projects.

## Support / Donate

If you think this script is useful and saves you a lot of work, then think about supporting the project:

1. Contribute to this project. Feel free to improve this project with your skills.
2. Spread the word: Tell others about this project.