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
    extensions: ['.js', '.vue', '.json', '.css'],
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
      threshold: 1240,
      minRatio: 0.8
    })
  ]
  mix.version();
}

mix.webpackConfig(configWebPack)




// mix.js('resources/js/app.js', 'public/js')
   // .sass('resources/sass/app.scss', 'public/css')
   // .version();

mix.scripts([
    'resources/js/plugins.js',
    'resources/js/scripts.js'
], 'public/js/all.js')
	.version();

// mix.styles([
//     'public/style/style.css',
//     'public/style/css/plugins.css',
//     'public/style/revolution/css/settings.css',
//     'public/style/revolution/css/layers.css',
//     'public/style/revolution/css/navigation.css',
//     'public/style/type/icons.css',
//     'public/style/css/color/blue.css',
//     'public/style/css/bootstrap.min.css',
// ], 'public/css/all.css');

// mix.minify('public/css/all.css');
mix.minify('public/css/all.css');
mix.minify('public/style.css');
    mix.minify('public/style/css/plugins.css');
    mix.minify('public/style/revolution/css/settings.css');
    mix.minify('public/style/revolution/css/layers.css');
    mix.minify('public/style/revolution/css/navigation.css');
    mix.minify('public/style/type/icons.css');
    mix.minify('public/style/css/color/blue.css');
    mix.minify('public/style/css/bootstrap.min.css');
