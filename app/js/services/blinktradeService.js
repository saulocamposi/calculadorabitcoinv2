var app = require('../manager-module.js');

app.factory('blinktradeService', function($http) {
  return {
    async: function() {
      var root_path = "backend/src/ws/services/blinktrade/";

      var urlfox = root_path + "blinktrade_fox_services.php";
      var urlsur = root_path + "blinktrade_sur_services.php";
      var urlchile = root_path + "blinktrade_chile_services.php";
      var urlurdu = root_path + "blinktrade_urdu_services.php";

      return $http.get(urlfox);  //1. this returns promise
    }
  };
});

module.exports = app;
