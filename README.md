# DESCRIPTION
First of all HUGE APPRECIATION TO https://github.com/bpocallaghan
and his Laravel Admin Starter.


This project aims in video distribution. It is based on the idea, that video servers CAN
be set at home and by small users.
  It streams in adaptive bit rate. in HLS and DASH, and records all in MP4.(Of course fill free to edit
		and modify the configurations as see fit for your needs.)
It based on Nginx and RTMP with Ffmpeg
Please keep in mind this is for my personal workflow.
This is video project for video crud admin portals.
I try to keep it clean, flexibly and friendly to use. This is not a complete project or best practises, just trying to help the community :).
Please let me know about any issues or if you have any suggestions.

# Laravel CMS Starter Project

A Laravel CMS Starter project with AdminLTE theme and core features.
- Laravel 5.7 (master)

# The VIDEO PLAYER

The video player is build with:
 - https://videojs.com/ - VideoJs
 - https://github.com/brightcove/videojs-thumbnails - videojs-thumbnails
 - https://github.com/videojs/videojs-contrib-hls - videojs-contrib-hls
 - https://github.com/mickey/videojs-ga - videojs.ga
 - https://github.com/xbgmsharp/videojs-watermark - videojs.watermark
 - https://www.npmjs.com/package/videojs-hls-quality-selector - videojs-hls-quality-selector
 - https://github.com/brightcove/videojs-playlist - videojs-playlist

## Features / What it includes
- Admin LTE admin theme
- Members (website and admin users)
- Google Analytics Reports (with charts)
- Website Page Builder
- Log Website Activities (if contact us was submitted, etc)
- Notifications (Laravel notifications)
- Log Admin Activities (when admin create,edit,delete a resource)
- Bootstrap Alerts and Form Error messages. package; bpocallaghan/alert
- Flash a Notification after a CRUD resource action. package; bpocallaghan/notify
- Generate crud resource, individual files. package; bpocallaghan/generators
- Impersonate any of your customers
- Roles, Assign roles to the user and navigation to exlude navigation for a user.
- Manage Video, Blog, Banners, FAQ, Photos and many more.

## Setup of Nginx
- Dowload nginx from https://nginx.org/download/nginx-1.15.4.tar.gz


## Setup (Basic)
- ```composer create-project paveltashev/laravel-livestream-nginx:dev-master laravel-livestream-nginx```
- open .env and set the app info (url, title, description, etc)
- create your database and set db name in .env
- ```php artisan migrate```
- ```php artisan db:seed```
	- open database\seeds\UserTableSeeder.php to enter your admin user
- open your browser (http://laravel-admin.local)
- log into the admin (http://laravel-admin.local/admin) with your admin user

## Setup (Advanced)
- complete 'basic' setup
- config\app.php -> set timezone
- create FB Website App https://developers.facebook.com/
- create a mailgun account and set custom domain
- google captcha https://www.google.com/recaptcha/admin#list
- google analytics account https://analytics.google.com/analytics/web
- google console developer account for google maps and google analytics API
    - https://console.developers.google.com
    - Enable the 'google analytics' API
	- Create api browser key for google maps
	- Get and Setup Laravel Analytics [Laravel Analytics (Spatie)](https://github.com/spatie/laravel-analytics/tree/3.1.0)
        - create NEW service account key
        - any name will work (I use google analytics)
        - key type is JSON
        - download and rename the json to 'service-account-credentials.json'
        - store the file under /storage/app/analytics
        - go to (google analytics)[https://analytics.google.com/analytics/]
        - go to admin - property - user management and add the service account's email as a user
        - go to admin - view - settings and copy the 'site id' to your .env
- get a Google Maps js API key (after you've created the project in google) https://developers.google.com/maps/documentation/javascript/get-api-key
- have a look at Admin\NavigationController.php on how to use datatables and datatables with ajax if more than 150 entries

## Admin LTE
If you would like to change the default skin.
Please have a look in `webpack.mix.js` Line ~110 and uncomment the desired skin.
Please also remember to update the skin's name in `'views\layouts\admin.blade.php'` - `<body class="skin-blue">`

## TODO
[Upcoming Changes and Features](https://github.com/bpocallaghan/laravel-admin-starter/blob/master/TODO.md)

## Thank you
- [ADMIN LTE](https://github.com/almasaeed2010/AdminLTE).
- Thank you [Taylor Ottwell](https://github.com/taylorotwell) for [Laravel](http://laravel.com/).
- Thank you [Jeffrey Way](https://github.com/JeffreyWay) for the awesome resources at [Laracasts](https://laracasts.com/).
- Thank you [Spatie](https://github.com/spatie) for all your packages.

## Change log
Please see the [CHANGELOG](http://bpocallaghan.co.za/changelog) for more information about changes.

## My Packages Included
- [File Generators](https://github.com/bpocallaghan/generators) Laravel 5 File Generators with config and publishable stubs
- [Notify](https://github.com/bpocallaghan/notify) Laravel 5 Flash Notifications with icons and animations and with a timeout
- [Alert](https://github.com/bpocallaghan/alert) A helper package to flash a bootstrap alert to the browser via a Facade or a helper function.
- [Impersonate User](https://github.com/bpocallaghan/impersonate) This allows you to authenticate as any of your customers.
- [Sluggable](https://github.com/bpocallaghan/sluggable) Provides a HasSlug trait that will generate a unique slug when saving your Laravel Eloquent model.

- [VideoJs](https://videojs.com/) Provides js library for the video player
