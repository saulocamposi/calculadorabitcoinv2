var app = require('./manager-module.js');

  app.config(['$translateProvider', function($translateProvider) {

    var translations_br = {
      'wallet' : 'Foxbit Wallet',
      'bids' : 'Bids',
      'exchanges' : 'Exchanges',
      'paircoin' : 'PairCoin',
      'exchanges' : 'Exchanges',
      'polionex_title' : 'Polionex Exchange - Altcoins Market',
      'volume' : 'Volume',
      'lasttrade' : 'Last Trade',
      'price' : 'Price',
      'companies' : 'Companies',
      'volume' : 'Volume',
      'highvalue' : 'High Value',
      'lowvalue' : 'Low Value',
      'value' : 'Value'
    }

    var translations_en = {
      'wallet' : 'Foxbit Wallet',
      'bids' : 'Bids',
      'exchanges' : 'Exchanges',
      'paircoin' : 'PairCoin',
      'exchanges' : 'Exchanges',
      'polionex_title' : 'Polionex Exchange - Altcoins Market',
      'volume' : 'Volume',
      'lasttrade' : 'Last Trade',
      'price' : 'Price',
      'companies' : 'Companies',
      'volume' : 'Volume',
      'highvalue' : 'High Value',
      'lowvalue' : 'Low Value',
      'value' : 'Value'
    }



    $translateProvider.translations('en', translations_en);
    $translateProvider.translations('br', translations_br);

    $translateProvider.preferredLanguage('en');

  }]);
