# WP Headless - A 'headless' WordPress installation

A [roots/Bedrock](https://github.com/roots/bedrock) based WordPress installation to easily spin-up and deploy a headless WordPress installation to use as Headless CMS for your JAMStack site.

- [WP Headless - A 'headless' WordPress installation](#wp-headless---a-headless-wordpress-installation)
  - [📃 Description](#-description)
    - [🧳 Features](#-features)
  - [📦 Requirements](#-requirements)
  - [🛠 Installation](#-installation)
  - [🚀 Deploying](#-deploying)
    - [📦 Requirements](#-requirements-1)
    - [💪 Usage](#-usage)

## 📃 Description

WP Headless is a barebones, yet versatile installation of WordPress to use as a headless CMS for all your JAMStack needs. It includes [WPGraphQL](https://www.wpgraphql.com/) for exposing a GraphQL API and includes a headless theme which redirects users to the admin and the WP Vercel Deploy Hooks plugin to dynamically deploy your Vercel project from your WordPress site.

### 🧳 Features

- The usually cool stuff brought by [roots/Bedrock](https://github.com/roots/bedrock) like:

  - Easy dependency management of themes, plugin and the WordPress core through Composer
  - Better WordPress folder structure
  - Easy WordPress configuration for different environments with `.env` files

- [WPGraphQL](https://www.wpgraphql.com/) - Exposes a GraphQL endpoint as a data source for your JAMstack site
- [WP Headless Theme](https://github.com/aderaaij/wp-headless-theme) - A 'headless' theme which disables the front-end and redirects users to the login / admin area
- [WP Vercel Deply Hooks](https://github.com/aderaaij/wp-vercel-deploy-hooks) - Plugin to deploy your Vercel project dynamically
- Easy deploy with [roots/bedrock-capistrano](https://github.com/roots/bedrock-capistrano)

## 📦 Requirements

- PHP >= 7.1
- [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

## 🛠 Installation

1. Clone the repository (`git clone git@github.com:aderaaij/wp-headless.git`)
2. Rename the `.env.example` in the project root to `.env`
3. Fill in required credentials in the `.env` file (equal to your `wp-config.php` in a regular WP install):
   - Database variables
     - `DB_NAME` - Database name
     - `DB_USER` - Database user
     - `DB_PASSWORD` - Database password
     - `DB_HOST` - Database host
       Optionally, you can define DATABASE_URL for using a DSN instead of using the variables above (e.g. mysql://user:password@127.0.0.1:3306/db_name)
   - `WP_ENV` - Set to environment (development, staging, production)
   - `WP_HOME` - Full URL to WordPress home (https://example.com)
   - `WP_SITEURL` - Full URL to WordPress including subdirectory (https://example.com/wp)
   - `AUTH_KEY`, SECURE_AUTH_KEY, LOGGED_IN_KEY, NONCE_KEY, AUTH_SALT, SECURE_AUTH_SALT, LOGGED_IN_SALT, NONCE_SALT
4. Point the webserver root to the `/path/to/site/web/` folder
5. Access WordPress admin at `https://example.com/wp/wp-admin/`

## 🚀 Deploying

This install includes the [Bedrock Capistrano](https://github.com/roots/bedrock-capistrano) deployment scripts to easily deploy your site.

⚠️ This requires remote `SSH` access to your server. If you don't have `SSH` access, you might be able to try [Capistrano with LFTP](https://coderwall.com/p/m5kpuq/capistrano-ftp-only-hosting-provider), and let me know how it goes 😅

### 📦 Requirements

- SSH access
- Ruby >= 1.9

Required Gems:

- capistrano (> 3.1.0)
- capistrano-composer

### 💪 Usage

- Deploy: `cap production deploy`
- Rollback: `cap production deploy:rollback`

Composer support is built-in so when you run a deploy, composer install is automatically run.
