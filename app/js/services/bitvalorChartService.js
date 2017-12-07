var app = require('../manager-module.js');

var bitvalorChartService = function() {
  var chart = {
    "type": "BarChart",
    "options": {
      "title": "BitValor Brazil",
      "pointSize": 100,
      "chartArea": {
        left: 90,
        top: 40,
        width: "70%",
        height: "70%"
      },
      width: 600,
      height: 300
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
        {"c" : [{"v" : "Mercado", "f": null},{"v" : 2236, "f": null}]},
        {"c" : [{"v" : "Negocie Coins", "f": null},{"v" : 2200, "f": null}]},
        {"c" : [{"v" : "Bitcointoyou", "f": null},{"v" : 2210, "f": null}]},
        {"c" : [{"v" : "Fox", "f": null},{"v" : 2245, "f": null}]}
      ]
    }
  };
return chart;
}

app.factory('bitvalorChartService', [bitvalorChartService]);

module.exports = app;
