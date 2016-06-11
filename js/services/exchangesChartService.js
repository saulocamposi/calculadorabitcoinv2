var app = require('../manager-module.js');

var exchangesChartService = function() {
  /*var chart = {
                "type": "LineChart",
                "options": {
                    "title": "Lines to horizon",
                    "pointSize": 7,
                    "width" : 200,
                    "height":200,
                    "chartArea": {left:80,top:80,width:"70%",height:"70%"},
                    "vAxis": {
                        "title": "Vertical Data",
                        "gridlines": {
                            "count": 10
                        }
                    },
                    "hAxis": {
                        "title": "Horizontal Data"
                    }
                },
                "data": {
                    "cols": [
                        {
                            "id": "head",
                            "label": "Label for HEAD",
                            "type": "number",
                            "p": {}
                        },
                        {
                            "id": "line1",
                            "label": "Line 1",
                            "type": "number",
                            "p": {}
                        },
                        {
                            "id": "line2",
                            "label": "Line 2",
                            "type": "number",
                            "p": {}
                        },
                        {
                            "id": "line3",
                            "label": "Line 3",
                            "type": "number",
                            "p": {}
                        },
                        {
                            "id": "line4",
                            "label": "Line 4",
                            "type": "number",
                            "p": {}
                        },
                        {
                            "id": "line5",
                            "label": "Line 5",
                            "type": "number",
                            "p": {}
                        },
                    ]}
            };
            */

  var chart = {
    "type": "Bar",
    "options": {
      "title": "Lines to horizon",
      "pointSize": 7,
      "width": 200,
      "height": 200,
      "chartArea": {
        left: 80,
        top: 80,
        width: "70%",
        height: "70%"
      }
    },
    "data":  {
      "cols" : [
        {"id":"1","label":"Mercado","pattern":"","type":"number"},
        {"id":"2","label":"Foxbit","pattern":"","type":"number"},
        {"id":"3","label":"btctoyou","pattern":"","type":"number"},
        {"id":"4","label":"negociecoins","pattern":"","type":"number"}
      ],
      "rows" : [10,10,10,10]
    }
}


return chart;
}

app.factory('exchangesChartService', [exchangesChartService]);

module.exports = app;
