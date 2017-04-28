# Laravel distributive with Admin panel, admin's Auth and WebPack

Contains:
- Laravel
- AdminLTE - https://github.com/almasaeed2010/AdminLTE
- Laravel Auth
- WebPack - https://github.com/webpack/webpack
- UniSharp Laravel Filemanager - https://github.com/UniSharp/laravel-filemanager
- Custom form-builder for simple creating new pages in admin panel

## Components

### Laravel

Pure Laravel 5.4.17

### AdminLTE

Light version of the AdminLTE with:

- adaptivity included (desktop/mobile)
- simple sidebar (single and list element)
- simple header with logout button
- iCheck plugin for beautiful checkboxes/radio

### Laravel Auth

Basic Laravel user's auth for administrator in admin panel. Auth data - admin/admin

!!!Note Basic auth routes Auth::routes() were redeclared with login and logout as useful.

### WebPack

WebPack was included for packing and minifying JS and CSS sources.

All list of possibilities:

- transform scss to css
- minify css
- minify js

All third-parted packages, using with WebPack, are in ../node_modules folder. You can reorder WebPack's rules and add own ones into the ../webpack.config.js.

Sources are in ../resources/assets directory, sorting by usage in admin part and front part of the site (site folder).
If  you want to add your custom modules - place them to the 'components' folder inside the 'site' and 'admin' paths. And don't forget to write them in the main source file - main.scss/main.js.

### Installation

Just clone repo to your local machine or download zip and unpack it and run `composer update --no-scripts` to update the Laravel version.

### Product's features

In admin panel you can:

- edit the admin's information
- CRUD site's pages
- manage site's images with UniSharp filemanager