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
      }, {
        test: /\.scss$/,
        loaders: ['style', 'css', 'postcss', 'sass']
      },
      {
       test: /\.woff2?(\?v=[0-9]\.[0-9]\.[0-9])?$/,
       loader: "url?limit=10000"
       },
       {
       test: /\.(ttf|eot|svg)(\?[\s\S]+)?$/,
       loader: 'file'
       },
      {
        test: /\.(png|jpg|jpeg|gif|svg|woff|woff2|ttf|eot)$/,
        loader: 'url-loader?limit=30000&name=[name]-[hash].[ext]'
      }  

    ],
  },

  postcss: [autoprefixer],
  devtool: 'sourcemap'
  //devtool: null,
};
