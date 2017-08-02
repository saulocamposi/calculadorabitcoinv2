var app = require('./manager-module.js');

  app.config(['$translateProvider', function($translateProvider) {

    var translations_br = {
      'wallet' : 'Carteiras Foxbit',
      'bids' : 'Ordens'
    }

    var translations_en = {
      'wallet' : 'Foxbit Wallets',
      'bids' : 'Bids'
    }

    $translateProvider.translations('en', translations_en);
    $translateProvider.translations('br', translations_br);

    $translateProvider.preferredLanguage('en');

  }]);
