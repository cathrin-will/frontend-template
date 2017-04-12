var path = require('path');
var sass = require('node-sass');

const webpack = require('webpack'); //to access built-in plugins

const config = {
		entry: './src/js/main.js',
		output: {
		path: path.resolve(__dirname, 'dist/js/'),
		filename: 'main.min.js'
	},
	plugins: [
		new webpack.ProvidePlugin({
			$: "jquery",
			jQuery: "jquery"
		})
	],
  module: {
    rules: [{
      test: /\.js$/, // Run the loader on all .js files
      exclude: /node_modules/, // ignore all files in the node_modules folder
      use: 'jshint-loader'
    }]
  },
    //  module: {
    //     rules: [{
    //         test: /\.scss$/,
    //         use: [{
    //             loader: "style-loader"
    //         }, {
    //             loader: "css-loader"
    //         }, {
    //             loader: "sass-loader",
    //             options: {
    //                 includePaths: ['src/sass/main.scss']
    //             }
    //         }]
    //     }]
    // }
};

module.exports = config;

var result = sass.renderSync({
  file: 'src/sass/main.scss',
  data: 'body{background:blue; a{color:black;}}',
  outputStyle: 'compressed',
  outFile: '/dist/css/main.css',
  sourceMap: true, // or an absolute or relative (to outFile) path
});
