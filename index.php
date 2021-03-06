<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
  <head>

    <!-- site meta content -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Way-Cooler</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/WCicon.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <!--<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">-->
    <meta name="msapplication-TileColor" content="#3372DF">
    <link rel="shortcut icon" href="images/WCfavicon.ico">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!-- <link rel="canonical" href="http://www.example.com/"> -->

    <!-- include angularjs and material design lite - shouldn't do this by cdn, will fix later-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
      #view-source {
        position: fixed;
        display: block;
        right: 0;
        bottom: 0;
        margin-right: 40px;
        margin-bottom: 40px;
        z-index: 900;
      }
    </style>
  </head>
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    
    <!-- way cooler site content container -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      
      <!-- include site wide header -->
      <?php include_once("/pages/header.html"); ?>
      
      <!-- page container div-->
      <main class="mdl-layout__content">

        <!-- overview page content content -->
        <?php include_once("/pages/home.html"); ?>

        <!-- features page -->
        <?php include_once("/pages/features.html"); ?>

        <!-- install info page -->
        <?php include_once("/pages/install.html"); ?>

        <!-- documentation page -->
        <?php include_once("/pages/docs.html"); ?>

        <!-- include site wide footer -->
        <?php include_once("/pages/footer.html"); ?>

      </main>
    </div>

    <!-- view source code button -->
    <a href="https://github.com/way-cooler" target="_blank" id="view-source" 
      class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">
      <img src="images/white-github-16.ico"> View Source Code</a>

  </body>
</html>
