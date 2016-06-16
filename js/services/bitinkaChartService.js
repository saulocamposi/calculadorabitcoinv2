var app = require('../manager-module.js');

var bitinkaChartService = function() {
  var chart = {
    "type": "PieChart",
    "options": {
      "pointSize": 100,
      "chartArea": {
        left: 90,
        top: 40,
        width: "70%",
        height: "70%"
      }
    },
    "data": {
      "cols": [{
        "id": "",
        "label": "Exchange",
        "pattern":"",
        "type": "string"
      }, {
        "id": "",
        "label": "Volume",
        "pattern":"",
        "type": "number"
      }]
    }
  };
return chart;
}

app.factory('bitinkaChartService', [bitinkaChartService]);

module.exports = app;
