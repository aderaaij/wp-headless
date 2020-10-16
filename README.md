# WP Headless - A 'headless' WordPress install based on Bedrock

A [roots/Bedrock](https://github.com/roots/bedrock) based WordPress installation to scratch my own itch: Easily spinning up and deploying a headless WordPress installation to a server to use as data source for front-end projects. Works out of the box with this [NextJS WPGraphQL WordPress starter](https://github.com/aderaaij/nextjs-wordpress-typescript)

## Features

- Deploy with Capistrano
- WPGraphQL
- Vercel Deploy Hooks plugin

## Headless theme

Redirects users to the admin login / admin area and offers a `functions.php` to add thumbnail support and other theme specific functions.

## WPGraphQL

WPGraphQL provides a GraphQL endpoint, schema and GUI for WordPress and is Included as a Must-Use (MU) plugin.

## Deploying

This install includes the [Bedrock Capistrano](https://github.com/roots/bedrock-capistrano) scripts to easily deploy your site to any server you have SSH access to.

### Requirements

- SSH access
- Ruby >= 1.9

Required Gems:

capistrano (> 3.1.0)
capistrano-composer

### Usage

Deploy: `cap production deploy`
Rollback: `cap production deploy:rollback`
Composer support is built-in so when you run a deploy, composer install is automatically run. Capistrano has a great deploy flow that you can hook into and extend it.
