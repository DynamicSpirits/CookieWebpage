<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./images/wasweb/cookie.png" type="image/x-icon" />
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <title>Kiki's Creative World</title>
    <meta name="description" content="TimelineJS Embed">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- CSS-->
    <link rel="stylesheet" href="../css/timeline.css?v1">
    <!--FONT-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Bevan%7CPontano+Sans&amp;amp;subset=latin,latin">
    <!-- Style-->
     <script type="text/javascript">
        $(document).ready(function() {
            // Cache selectors for faster performance.
            var $window = $(window),
                $mainMenuBar = $('#navbar-ex-collapse'),
                $mainMenuBarAnchor = $('#mainMenuBarAnchor');

            // Run this on scroll events.
            $window.scroll(function() {
                var window_top = $window.scrollTop();
                var div_top = $mainMenuBarAnchor.offset().top;
                if (window_top > div_top) {
                    // Make the div sticky.
                    $mainMenuBar.addClass('stick');
                    $mainMenuBarAnchor.height($mainMenuBar.height());
                } else {
                    // Unstick the div.
                    $mainMenuBar.removeClass('stick');
                    $mainMenuBarAnchor.height(0);
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Cache selectors for faster performance.
            var $window = $(window),
                $mainMenuBar = $('#bg'),
                $mainMenuBarAnchor = $('#mainMenuBarAnchor');

            // Run this on scroll events.
            $window.scroll(function() {
                var window_top = $window.scrollTop();
                var div_top = $mainMenuBarAnchor.offset().top;
                if (window_top > div_top) {
                    // Make the div sticky.
                    $mainMenuBar.addClass('sticks');
                    $mainMenuBarAnchor.height($mainMenuBar.height());
                } else {
                    // Unstick the div.
                    $mainMenuBar.removeClass('sticks');
                    $mainMenuBarAnchor.height(0);
                }
            });
        });
    </script>

    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="./home1.css" rel="stylesheet" type="text/css">
  
    <style>
       #navbar-ex-collapse ul li a:hover {
            color: #f39d9f;
        }
        
        .sticks {
            position: fixed;
            top: 0;
            left: 0;
            margin: 0px;
            height: 50px;
        }
        
        .stick {
            position: fixed;
            top: 0;
            margin: 0px;
            z-index: 999;
        }
      html, body {
   
      }
      .vco-timeline {
        font-family: Avenir;
      	
      }
      .tl-storyjs{
         font-family: Avenir;
      }
      .text{
         font-family: Avenir;
      }
      
    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML elements-->
    <!--if lt IE 9
    script(src='http://html5shim.googlecode.com/svn/trunk/html5.js')
    
    -->
  </head>
  <body>
 
    <!-- JavaScript-->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="./images/wasweb/theme.png" class="center-block img-responsive" width="400px">
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-default navbar-static-top navbarself">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand"></a>
            </div>

            <div id="mainMenuBarAnchor"></div>
            <div style="background-color:white;width:100%;" id="bg"></div>
            <div class="collapse navbar-collapse" id="navbar-ex-collapse">

                <ul class="nav navbar-centre navbar-left navbar-nav navbarcentre">
                    <li class="navbarself">
                        <img height="50" alt="Brand" src="./images/wasweb/cookie.png">
                    </li>
                    <li class=" navbarself">
                        <a href="../../../home1.html">Home</a>
                    </li>
                    <li class=" navbarself ">
                        <a style="color: #f39d9f;" href="../../../about1.html">About</a>
                    </li>
                    <li class="navbarself">
                        <a href="../../../gallery.html">Gallery</a>
                    </li>
                    <li class="navbarself">
                        <a href="#">Resume</a>
                    </li>
                    <li class="navbarself">
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

           
       <div id="timeline"></div>

       <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">  
                </div>
                <div class="col-md-7">
                </div>
                <div class="col-md-1">
                    <div class="btn-group sidebar" style="width:6em;z-index:999">
                        <a href="../../../about1.html" style="color: #f39d9f;" class="active btn btn-block btn-default btn-sm">Profile</a>
                        <a href="../../../skills.html" class="btn btn-block btn-default btn-sm">Skills</a>
                        <a href="./groups_test_2.php" class="btn btn-block btn-default btn-sm" data-toggle="modal">Experience</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="pager">
                        <li>

                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="pager">
                        <li>
                            <a href="../../../skills.html" class="next">←  Prev</a>
                        </li>
                        <li>
                            <a href="../../../about1.html" class="next">Next  →</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4">
                    <ul class="pager">
                        <li>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
     <footer class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 text-left">
                    <div class="row">
                        <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                            <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                            <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                            <a href="#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                            <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 hidden-xs text-right">
                            <a href="#"><i class="fa fa-envelope-o fa-fw fa-lg pull-left text-danger"></i></a>
                            <a href="#"><i class="fa fa-fw fa-lg fa-weibo pull-left text-danger"></i></a>
                            <a href="#"><i class="fa fa-fw fa-lg fa-weixin pull-left s text-danger"></i></a>
                            <a href="#"><i class="fa fa-fw fa-lg fa-linkedin-square hub pull-left text-danger"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-right">Copyright 2017. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="../js/timeline.js"></script>
    <script>
      var timeline = new TL.Timeline('timeline', 'groups_test_2json.php', {
      	
      });
      window.onresize = function(event) {
      	timeline.updateDisplay();
      }
    </script>
  </body>
</html>