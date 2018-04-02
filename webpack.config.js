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
    rules: [{
        test: /\.css$/,
        use : ['style-loader', 'css-loader', 'postcss-loader']
      }],
  },
  devtool: 'source-map'
};
