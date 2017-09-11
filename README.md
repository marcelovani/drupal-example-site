# Drupal Example site
An example of building a Drupal 8 site with Drupal Console commands + composer

# Building this site using Drupal Console

Requires: Drupal Console Custom Commands https://github.com/dennisinteractive/drupal_console_commands

- Make sure you copy the site.yml into ~/.console/sites folder as per instructions
- Make sure your database server is running and allows creation of databases
- Create your vhost configuration to point to the directory of the drupal root/web.
i.e. `/var/www/sites/drupal/docroot_d7-example/web`

### Build the site

`drupal site:build`

Example:

`drupal site:build d8-example -e dev --branch=8.x`

### Running drush commands

Go to the site directory

`cd /var/www/sites/drupal/d8-example/web`

`drush status`
