const webpack = require('webpack');
const path = require('path');
const autoprefixer = require('autoprefixer');

module.exports = {

  entry: [
    './app/js/app.js',
  ],
  output: {
    path: path.join(__dirname, 'public', 'assets'),
    filename: 'app.js',
    publicPath: '/public/assets/',
  },
  module: {
    loaders: [{
        test: /\.css$/,
        loaders: ['style', 'css', 'postcss']
      }],
  },
  devtool: 'source-map'
};
