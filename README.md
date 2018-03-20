# CalculadoraBitcoin V2
# Introduction

 CalculadoraBitcoin website is open-source project that has aim to provide updated values of cryptocurrency exchanges around the world. Showing prices, volumes, correlations among differents altcoins which is provided by public APIs.  
 Actualy the most of datasources comes from Brazilians exchanges and some correlated data from couples of internacional exchanges. We are continuously improving this project with more code and documentation.   
Our aim has been coding for increase our database adding new exchanges, showing more live prices and provide the real scenario of cryptocurrency market around the world.
  
# History 

 In the begining this project were launched with mainly a calculator to convert bitcoin prices to BRL currency and bitcoin prices in different currencies (blockchain.info ticker). Now we have division of information through cards with different values from  public apis. Some are Brazilian exchanges but also  South  Americas exchanges and Altcoins market. Another interesting features are the web socket plugin from tradindview and youtube channel (Tradindview and youtube channel were disable).
 
The initial propose were increase consuming of BTC public APIs and showing them as a simple board trade. The first version gained efforts to get more endpoints of public APIs and the second version the aim was layout and usability, increasing the number of cards that can bring informations tickers, volume, fiat currency and others, improving the front-end presentation.
 
 CalculadoraBitcoin has data values from Brazil, Venezuela that's is the most important volume in South America, but also have Bitinka ticker with diferentes currencies as Bolivian, Venezuelan, Peruvian and Chile currency. 

# To contribute

Our aim is on the topics below, but you are open to propose wherever topics you want which you feel confident. Much more people thinking in the same achievement the things goes better. Our team still working to improve the asyncronous webservices which consumes in differents endpoints, in general public APIs. Another challenge is the front-end, dynamic presentations, animations, asyncronous loading using angular 1.5. Join Us and enjoy to code.

# Documentation 
The documentation consist of a README mainly, but we pretend to start a wiki with informations about technologies and installation, architecture and code.

# Test Coverage
Calculadora bitcoin has to coverage with three important topics: unit test, behavior test and integration Test.
Unit test could be usefull for Angular controllers to test the logic of method, the behavior has to test calculadora actions and one of most important test is the integration Apis, testing performance and latency.

# Issues 
The project are open to post issues, in general are bugs to solve and implementations or refactore . 

# Microservices perspectives
This system has to aim growth using microservices with differents architectures and languages. Our front-end in the moment were made with pure HTML 5, AngularJS and PHP as the back-end. We will start other services in rails which will be the base of ORM back-end sharing contents via webservices using small machines on the cloud.

# Archteture Project

This project is composed by front-end :HTML 5,CSS 3,BootStrap 3, AngularJS 1.5 - Its used to databinding   

# Front-End
The fisrt version calculadorabitcoin were coded using plan css, angular 1.5, for second version were addded bootstrap 3.
For the thrird version we are migrating for React instead of angular, but could be possible to run all versions and package as well

# Backend
Most of all services are coded with PHP 5 to consume public APIs from Exchanges

# Build 
The Webpack 1.5 (current version) - To build all assets, chunk and package. 
We are migrating for 2.0 version

# To Build

Clone the project to repository -  git clone <project> 

Install dependencies from NPM repository- npm install

Package the project with Webpack- wepack

Run Python HTTP WebServer - python -m HTTPSimpleServer

For more convinient you can use Apache as VirtualHost

# To donate
Donate Bitcoins through QR code below the website

# License
Open Source License
