# Wordpress Starter for using Composer  #

This is a starter to get up and running with Wordpress easily and have configs for different environments. It makes it easy to move from one server to another and installs WP as a dependency. This way, you are working outside of the WP install and it can be updated through composer. 

To start with Composer, make sure you have the requirements downloaded from [here](https://getcomposer.org/).

This starter uses [WP Packagist](https://wpackagist.org/) to pull assets. Most assets and their versions can be found in there

# Getting Started #

To get started, update the composer.json file with the version of Wordpress and the plugins you will need. Then run ```$ composer install``` to pull the packages into the project. Set up your environment variable in the config files. There is not a wp-config.local.php file included in the repo so use the example to create one along with your database. Then run through the WP install as you normally would.

NOTE: For packages like ACF Pro, they are not included in the normal WP Packagist repos. It is pulled from a different source. In order to get the license key to work, place the key in the .env file.    