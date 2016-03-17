Vagrant Silex
==================

Simple Vagrant box including
* apache2
* php (including Xdebug)
* mysql
* simple [silex](http://silex.sensiolabs.org/) project

Setup
-------------------
* Install [Vagrant >= 1.6.5](https://www.vagrantup.com/downloads.html) & [VirtualBox](https://www.virtualbox.org/)
* Clone this repository
* go to project root and run [**vagrant box add ubuntu/trusty32** and] **vagrant up**
* open **localhost:8001/welcome/&lt;yourname&gt;**

Project Structure
-------------------
* configure your silex app: **src/app.php**
* add further pages: **src/controllers.php**
* set up your database: **sql/datadefinition.sql**
* prefill your database: **sql/datamanipulation.sql**
* add twig templates: **web/templates/**

Website Login
-------------------
* the login data are stored in the silex DB in 'user_login' table
* there are two preset logins:
      - username: user ; password: password
      - username: nico ; password: p123
