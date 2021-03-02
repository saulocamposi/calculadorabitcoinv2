require("angular");
require("angular-route");
require("angular-google-chart");
require("angular-busy");
require("angular-animate");
require("angular-translate");
require("bootstrap");
require("jquery");
require("popper.js");
require("chart.js");
require("angular-chart.js");

require("./controllers/value.js");
require("./manager-module.js");
require("./menu-routes.js");
require("./translate-provider.js");

require("./controllers/calculatorcontroller.js");
require("./controllers/exchangescontroller.js");
//require("./controllers/foxbitcontroller.js");
require("./controllers/tradingviewcontroller.js");
require("./controllers/blinktradecontroller.js");
require("./controllers/poloniexcontroller.js");
require("./controllers/poloniexcontrollerv2.js");
require("./controllers/coinbrcontroller.js");
require("./controllers/walletfoxbitcontroller.js");
require("./controllers/bitinkacontroller.js");
require("./controllers/bitvalorcontroller.js");
require("./controllers/chartjscontroller.js");


require("./services/forex.js");
require("./services/blinktradeService.js");
require("./services/exchangesChartService.js");
require("./services/blinktradeChartService.js");
require("./services/bitinkaChartService.js");
require("./services/bitvalorChartService.js");

require("./services/polionexChartService.js");
require("./services/foxbitService.js");


/*
TODO future bootstrap configured for scss
require ("custom");
@import "~bootstrap/scss/bootstrap";
*/
require ("bootstrap/dist/css/bootstrap.min.css");
require("../css/bootstrap-custom.css");
require("../css/bootstrap-custom-card.css");
require("../css/bootstrap-custom-panel.css");
require("../css/calc_bitcoin.css");
require("../css/calc_income.css");
require("../css/card.css");
require("../css/main.css");
require("../css/main_calculator.css");
