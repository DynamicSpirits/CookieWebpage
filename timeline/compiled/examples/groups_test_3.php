<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Groups Test 3</title>
    <meta charset="utf-8">
    <meta name="description" content="TimelineJS Embed">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- CSS-->
    <link rel="stylesheet" href="../css/timeline.css?v1">
    <!--FONT-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Bevan%7CPontano+Sans&amp;amp;subset=latin,latin">
    <!-- Style-->
    <style>
      html, body {
      	height:100%;
      	width:100%;
      	padding: 0px;
      	margin: 0px;
      }
      .vco-timeline {
      	
      }
      
    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML elements-->
    <!--if lt IE 9
    script(src='http://html5shim.googlecode.com/svn/trunk/html5.js')
    
    -->
  </head>
  <body>
    <div id="timeline"></div>
    <!-- JavaScript-->
    <script src="../js/timeline.js"></script>
    <script>
      var timeline = new TL.Timeline('timeline', 'groups_test_3json.php', {
      	
      });
      window.onresize = function(event) {
      	timeline.updateDisplay();
      }
    </script>
  </body>
</html>