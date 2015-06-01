<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="/css/style.css">

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script>
    ;(function(win, $){
      "use strict";

      var BHPHOTO = window.BHPHOTO = (typeof window.BHPHOTO !== "undefined") ? win.BHPHOTO : {};

      BHPHOTO.shuffleArray = function (array) {
        var tmp, current, top = array.length;

        if (top) {
          while(--top) {
            current = Math.floor(Math.random() * (top + 1));
            tmp = array[current];
            array[current] = array[top];
            array[top] = tmp;
          }
        }

        return array;
      };
    }());

    // Responsive Images
    (function( win ){

      var doc = win.document,
        winWidth = doc.documentElement.clientWidth,
        breakPoint = ( 'rwd_breakPoint' in win ) ? win.rwd_breakPoint : 480,
        date = new Date();

      date.setTime(date.getTime()+(1/*1 day*/*24*60*60*1000));
      doc.cookie = "rwdimgsize="+ ( winWidth > breakPoint ? "large" : "small" ) +"; expires=" + date.toGMTString() +"; path=/";

    })( this );
  </script>
  <script src="/js/vendor/modernizr-2.5.3.min.js"></script>
</head>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<div class="main-menu">
  <h2><a href="/">Bob Holt Photography</a></h2>
  <ul>
    <li><a href="/about/">About</a></li>
    <li><a href="/portfolio/">Portfolio</a></li>
    <li><a href="/contact/">Contact</a></li>
  </ul>
</div>
<div class="clearfix"></div>