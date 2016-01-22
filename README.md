# About

Skeleton for F3 based PHP projects. Goal of the project is to provide sane
defaults for PHP projects.

# Features

Project tries to obey best practices of modern PHP web development:

- Deployment using deployer
- Utilizing composer for dependencies
- Support for generating documentation using phpdoc

# Installation

Installing is simple and really straight forward (all commands should be 
performed in project's root directory):

- run "composer update"
- Configure application settings in config.ini
- run "cp -rpv vendor/maximebf/ public/vendor/" to get phpdebugbar working
- Make sure tmp folder is writable by httpd user
- Run "npm install" to get all the npm based dependencies installed

# Contributing

It's a small project, but if you want to contribute please do by submitting pull
requests and reporting issues :)