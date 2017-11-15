var app = require('../manager-module.js');

app.factory('foxbitservice', function() {

  var root_path = "backend/src/ws/services/";

    $http.get( root_path + "services.php?brand=fox").then(function(response) {
      var datafoxbit = response.data;
    });

  return datafoxbit;
});

module.exports = app;
