# Drupal Example site
An example of building a Drupal 7 site with Drupal Console commands + make file

# Building this site using Drupal Console

Requires: Drupal Console Custom Commands https://github.com/dennisinteractive/drupal_console_commands

Make sure you copy the site.yml into ~/.console/sites folder as per instructions

### Building a Drupal distro

`drupal distro:build`

Example:

`drupal distro:build -e dev --branch=7.x --name=d7-example --destination=/var/www/sites/drupal`

This is chain command found in ~/.console/chain
You can write your own chain command or provide the repo for your own distro

### Manual steps
- Make sure your database server is running and allows creation of databases
- Create your vhost configuration to point to the directory of the drupal root.
i.e. `/var/www/sites/drupal/docroot_d7-example`

### Build the site

`drupal site:build`

Example:

`drupal site:build d7-example -e dev --branch=7.x`

### Running drush commands

Go to the site directory

`cd /var/www/sites/drupal/docroot_d7-example/sites/example`

`drush status`
