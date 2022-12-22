const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/app.scss', 'public/css');
mix.js('resources/js/home_scroll.js', 'public/js')
mix.js('resources/js/home_animation.js', 'public/js')
mix.js('resources/js/id_scroll_speed.js', 'public/js')
mix.js('resources/js/page/help_animation.js', 'public/js')
mix.js('resources/js/page/instruction.js', 'public/js')
mix.js('resources/js/page/text_animation.js', 'public/js')
mix.js('resources/js/page/wallpaper_card.js', 'public/js')
mix.js('resources/js/page/help_page.js', 'public/js')
mix.js('resources/js/page/account.js', 'public/js')
mix.js('resources/js/layouts_animations/mobile_menu.js', 'public/js')
mix.js('resources/js/layouts_animations/footer.js', 'public/js')
mix.js('resources/js/layouts_animations/chat.js', 'public/js')
