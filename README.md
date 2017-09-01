# Drupal Example site
An example site to be used with Drupal Console commands

# Building this site using Drupal Console

Requires: Drupal Console Custom Commands https://github.com/dennisinteractive/drupal_console_commands

Make sure you copy the site.yml into ~/.console/sites folder as per instructions

### Building a Drupal distro

`drupal distro:build`

This is chain command found in ~/.console/chain
You can write your own chain command or provide the repo for your own distro

### Manual steps
- Make sure your database server is running and allows creation of databases
- Create your vhost configuration to point to the directory of the distro
- If you are using a site name different than _default_ You need to add the site to sites/sites.php (Temporarily done manually) i.e. `$sites['8080.localhost.example'] = 'example.com';`

### Build the site

`drupal site:build`
