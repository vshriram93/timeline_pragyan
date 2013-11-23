<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Timeline JS Example</title>
    <meta charset="utf-8">
    <meta name="description" content="TimelineJS example">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <style>
      html, body {
       height:100%;
       padding: 0px;
       margin: 0px;
      }
    </style>
    <!--[if lt IE 9]>
       <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
      <div id="header">
         <div id="headerimg">
           <img src="images/header.jpg" alt="header"/>
         </div>
      </div>
      <!-- BEGIN Timeline Embed -->
      <div id="timeline-embed"></div>
      <script type="text/javascript">
        var timeline_config = {
         width: "100%",
         height: "100%",
         source: 'example_json.json'
        }
      </script>
      <script type="text/javascript" src="js/storyjs-embed.js"></script>
      <!-- END Timeline Embed-->
  </body>
</html>