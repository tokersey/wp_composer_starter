# Wordpress Starter for using Composer  #

This is a starter to get up and running with Wordpress easily and have configs for different environments. It makes it easy to move from one server to another and installs WP as a dependency. This way, you are working outside of the WP install and it can be updated through composer. 

To start with Composer, make sure you have the requirements downloaded from [here](https://getcomposer.org/).

This starter uses [WP Packagist](https://wpackagist.org/) to pull assets. Most assets and their versions can be found in there.

# Getting Started #

To get started, update the composer.json file with the version of Wordpress and the plugins you will need to start the project.

NOTE: For packages like ACF Pro, they are not included in the normal WP Packagist repos. It is pulled from a different source due to licensing. In order to get the license key to work, place the key in the .env file.

## wp-config.default.php ###

In the public/wp-config.default.php file, update $THEME_NAME variable to the name of the theme in the themes folder. If this directory does not exist, create it now.

ex: wp-content/themes/$THEME_NAME

Then, grab new auth keys from https://api.wordpress.org/secret-key/1.1/salt/ and add them to the same config file.

If you update the table prefixes, do that in this file as well.

## wp-config.env.php ##

Open the public/wp-config.env.php file and replace the example urls with the live, development and local domains used for the project.

## wp-config.example.php ##

Duplicate the public/wp-config.example.php file and name it wp-config.local.php with your local environment database settings. You will also need a wp-config.development.php and wp-config.production.php file for their respective servers. Change WP_DEBUG to true for any local or development environments.

## And away we go ##

Run ```$ composer install``` to pull the packages into the project. This will create a wp folder where the WordPress install will live. You will not have to do anything directly in the wp directory.

Then, run through the WP install as you normally would by visiting the domain set up for your local environment (http://example.dev).

# Updates #

When changes are made to the composer.json file, run the ```$ composer update``` command to pull in the new dependencies.

[Credit to Studio 24 for their multi-environment config.](https://github.com/studio24/wordpress-multi-env-config)