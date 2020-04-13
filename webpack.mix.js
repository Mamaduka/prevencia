const mix = require('laravel-mix');

mix.disableNotifications();

mix.styles( [ 'assets/css/main.css' ], 'assets/css/main.min.css' );
mix.babel( [ 'assets/js/scripts.js' ], 'assets/js/scripts.min.js' );
mix.babel( [ 'assets/js/stats.js' ], 'assets/js/stats.min.js' );

/*
 * Add custom Webpack configuration.
 *
 * @link https://laravel.com/docs/5.8/mix#custom-webpack-configuration
 * @link https://webpack.js.org/configuration/
 */
mix.webpackConfig( {
  devtool      : mix.inProduction() ? false : 'source-map',
  performance  : { hints  : false },
  watchOptions : { ignored: /node_modeuls/, }
} );
