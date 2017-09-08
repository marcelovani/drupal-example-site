# Drupal Example site
An example of building a Drupal 7 site with Drupal Console commands + composer

# Building this site using Drupal Console

Requires: Drupal Console Custom Commands https://github.com/dennisinteractive/drupal_console_commands

- Make sure you copy the site.yml into ~/.console/sites folder as per instructions
- Make sure your database server is running and allows creation of databases
- Create your vhost configuration to point to the directory of the drupal root/web/core.
i.e. `/var/www/sites/drupal/docroot_d7-example/web/core`

### Build the site

`drupal site:build`

Example:

`drupal site:build d7-example-composer -e dev --branch=7.x-composer`

### Running drupal commands

Go to the site directory

`cd /var/www/sites/drupal/docroot_d7-example/web/core`

Run drush commands

`drush status`

