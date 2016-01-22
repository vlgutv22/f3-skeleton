# About

Skeleton for F3 based PHP projects. Goal of the project is to provide sane
defaults for PHP projects.

# Features

Project tries to utilize best practices of modern PHP web development:

- Based on excellent [Fat Free Framework](http://fatfreeframework.com/home)
	- Caching, templating, routing and other goodies courtesy of Fat Free Framework
- Deployment using [deployer](http://deployer.org)
- [Composer](https://getcomposer.org) for dependencies management
- Support for generating documentation using [phpdoc](http://www.phpdoc.org)
- JavaScript dependencies management using [Browserify](http://browserify.org)
- Support for running tasks using [Grunt](http://gruntjs.com)
	- Image optimization
	- JavaScript and CSS minimization
	- LESS compilation
- [PHP Debug bar](http://phpdebugbar.com) support
- Multilingual from get go
- Sane security settings
- Easy to extend using plugins

# Project structure

- **app** - application logic
	- **controllers** - controller logic 
	- **dict** - language files
	- **models** - database logic
	- **plugins** - plugins that can be used to extend functionality
	- **views** - templates
- **logs** - application logs
- **node_modules** - npm installation location
- **public** - this folder needs to be exposed to web access
	- **css** - Minified and optimized CSS files
		- **source** - LESS source files
	- **js** - Optimized JavaScript files
		- **source** - JavaScript source files before processing by browserify
	- **uploads** - uploads folder (if your application needs an upload storage)
	- **images** - Optimized image files
		- **source** - Original image files
- **index.php** - main application file (routing etc)
- **tmp** - Temp files
	- **cache** - Cache files if file caching backend is used
- **vendor** - composer files installation location
- **composer.json** - Composer dependency file
- **config.ini** - Web application config file (turn caching on/off, set language etc)
- **deploy.php** - Deployment script
- **Gruntfile.js** - Grunt configuration script
- **License** - self explanatory
- **package.json** - npm dependency file
- **README.md** - this file

# Installation

Installing is simple and really straight forward (all commands should be 
performed in project's root directory):

- run `composer update` to install all needed PHP dependencies
- Configure application settings in config.ini
- run `cp -rpv vendor/maximebf/ public/vendor/` to get phpdebugbar working
- Make sure tmp and tmp/cache folders is writable by httpd user
- Run `npm install` to get all the npm based dependencies installed
- Run `grunt watch` during development (autocompiling js and css)
- Run `grunt` before deployment to optimize images and other time consuming tasks not ran by `grunt watch`
- Edit deployment script
- Deploy using `./vendor/bin/dep deploy`

# Contributing

It's a small project, but if you want to contribute please do by submitting pull
requests and reporting issues :)