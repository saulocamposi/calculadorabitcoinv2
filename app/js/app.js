require("angular");
require("angular-route");
require("angular-google-chart");
require("angular-busy");
require("angular-animate");
require("angular-translate");


require("./controllers/value.js");
require("./manager-module.js");
require("./menu-routes.js");
require("./translate-provider.js");

require("./controllers/calculatorcontroller.js");
require("./controllers/exchangescontroller.js");
require("./controllers/bitvalorcontroller.js");
require("./controllers/foxbitcontroller.js");
require("./controllers/blinktradecontroller.js");
require("./controllers/poloniexcontroller.js");
require("./controllers/poloniexcontrollerv2.js");
require("./controllers/coinbrcontroller.js");
require("./controllers/walletfoxbitcontroller.js");
require("./controllers/bitinkacontroller.js");


require("./services/forex.js");
require("./services/exchangesChartService.js");
require("./services/blinktradeChartService.js");
require("./services/bitinkaChartService.js");
require("./services/polionexChartService.js");
require("./services/foxbitService.js");

require("../css/bootstrap-custom.css");
require("../css/calc_bitcoin.css");
require("../css/calc_income.css");
require("../css/card.css");
require("../css/main.css");
require("../css/main_calculator.css");
