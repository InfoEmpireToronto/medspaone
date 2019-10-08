const mix = require('laravel-mix');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const CompressionPlugin = require('compression-webpack-plugin');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

 let configWebPack = {
  resolve: {
    extensions: ['.js', '.vue', '.json'],
    alias: {
      '@': __dirname + '/resources'
    },
  },
}


if(mix.inProduction()) {
  configWebPack.output = {
    chunkFilename: `[name].[chunkhash].js`,
    publicPath: '/',
  }

  configWebPack.plugins = [
    // new CleanWebpackPlugin([
    //   'public/css',
    //   'public/js',
    // ]),
    new CompressionPlugin({
      filename: "[path].gz[query]",
      algorithm: "gzip",
      test: /\.js$|\.css$|\.html$|\.svg$/,
      threshold: 10240,
      minRatio: 0.8
    })
  ]
  mix.version();
}

mix.webpackConfig(configWebPack)




mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

mix.scripts([
    'resources/js/plugins.js',
    'resources/js/scripts.js'
], 'public/js/all.js');