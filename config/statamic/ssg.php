<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Base URL
    |--------------------------------------------------------------------------
    |
    | This informs the generator where the static site will eventually be hosted.
    | For instance, if you are relying on absolute URLs in your app, this one
    | will be used. It should be an absolute URL, eg. "http://my-app.com"
    |
    */

    'base_url' => config('app.url'),

    /*
    |--------------------------------------------------------------------------
    | Destination Directory
    |--------------------------------------------------------------------------
    |
    | This option defines where the static files will be saved.
    |
    */

    'destination' => storage_path('app/static'),

    /*
    |--------------------------------------------------------------------------
    | Files and Symlinks
    |--------------------------------------------------------------------------
    |
    | Directories and files copied into the generated site. This project uses
    | Laravel Mix (not Vite), so the compiled CSS/JS live in public/css and
    | public/js alongside the mix-manifest.json the {{ mix }} tag reads. The
    | uploaded asset container ("Assets") is served from public/assets.
    |
    */

    'copy' => [
        public_path('css') => 'css',
        public_path('js') => 'js',
        public_path('assets') => 'assets',
        public_path('mix-manifest.json') => 'mix-manifest.json',
        public_path('favicon.ico') => 'favicon.ico',
        public_path('favicon.png') => 'favicon.png',
        public_path('favicon-dark.png') => 'favicon-dark.png',
        public_path('robots.txt') => 'robots.txt',
    ],

    'symlinks' => [
        //
    ],

    /*
    |--------------------------------------------------------------------------
    | Additional URLs
    |--------------------------------------------------------------------------
    |
    | Here you may define a list of additional URLs to be generated,
    | such as manually created routes.
    |
    */

    'urls' => [
        //
    ],

    /*
    |--------------------------------------------------------------------------
    | Exclude URLs
    |--------------------------------------------------------------------------
    |
    | Here you may define a list of URLs that should not be generated.
    |
    */

    'exclude' => [
        //
    ],

    /*
    |--------------------------------------------------------------------------
    | Trailing Slashes
    |--------------------------------------------------------------------------
    |
    | Enable to enforce trailing slashes on generated URLs. Some static site
    | hosts expect trailing slashes on URLs for things like SEO sitemaps
    | and RSS feeds in order to comply with the server configuration.
    |
    */

    'enforce_trailing_slashes' => false,

    /*
    |--------------------------------------------------------------------------
    | Pagination Route
    |--------------------------------------------------------------------------
    |
    | Here you may define how paginated entries are routed. This will take
    | effect wherever pagination is detected in your antlers templates,
    | like if you use the `paginate` param on the `collection` tag.
    |
    */

    'pagination_route' => '{url}/{page_name}/{page_number}',

    /*
    |--------------------------------------------------------------------------
    | Glide
    |--------------------------------------------------------------------------
    |
    | Glide images are dynamically resized server-side when requesting a URL.
    | On a static site, you would just be serving HTML files without PHP.
    | Glide images will be pre-generated into the given directory.
    |
    */

    'glide' => [
        'directory' => 'img',
        'override' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Failures
    |--------------------------------------------------------------------------
    |
    | You may configure whether the console command will exit early with a
    | failure status code when it encounters errors or warnings. You may
    | want to do this to prevent deployments in CI environments, etc.
    |
    */

    'failures' => false, // 'errors' or 'warnings'

    /*
    |--------------------------------------------------------------------------
    | Verbosity
    |--------------------------------------------------------------------------
    |
    | When enabled, the SSG will print a line for every page it generates.
    | Useful for debugging or keeping track of the command's progress.
    |
    */

    'verbose' => true,

];
