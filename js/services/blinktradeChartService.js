var app = require('../manager-module.js');

var blinktradeChartService = function() {
  var chart = {
    "type": "PieChart",
    "options": {
      "pointSize": 100,
      "width": 600,
      "height": 250,
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
        "label": "exchange",
        "pattern":"",
        "type": "string"
      }, {
        "id": "",
        "label": "Preço",
        "pattern":"",
        "type": "number"
      }],
      "rows" : [
        {"c" : [{"v" : "FoxBit", "f": null},{"v" : 230, "f": null}]},
        {"c" : [{"v" : "SurBitcoin", "f": null},{"v" : 30, "f": null}]},
        {"c" : [{"v" : "ChileBit", "f": null},{"v" : 20, "f": null}]},
        {"c" : [{"v" : "Urdubit", "f": null},{"v" : 5, "f": null}]}
      ]
    }
  };
return chart;
}

app.factory('blinktradeChartService', [blinktradeChartService]);

module.exports = app;
