<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>Historia</title>

    <?php 
        require 'head.php' ;
    ?>

    <link id="otros" rel="stylesheet" type="text/css" href="public/css/map.css">

  </head>
  <body>

    <?php 
        require 'nav.php' ;
    ?>

<div id="page-content-wrapper container-fluid" style="height:100%;"> 
  <div id="contentHolder">
      <div id="mapDiv">
      <div id="style-selector-control" class="map-control">
              <input type="radio" name="show-hide" id="hide-poi" class="selector-control">
              <label for="hide-poi">Hide</label>
              <input type="radio" name="show-hide" id="show-poi" class="selector-control" checked="checked">
              <label for="show-poi">Show</label>
            </div>
        <div id="map"></div>
          <div id="demo"></div>
    </div> <!-- content holder -->
</div> <!-- content wrapper -->

    <div id="scripts">
        <script id="mapi" src="public/scripts/map.js" > </script>
        <script id="mapi" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1zPG01N5oNIdVfKZR9SGAB12E6xRqxh0&callback=initMap" ></script>

    <?php
        require 'scripts.php';
    ?>
    </div>
    <?php
      require 'footer.php';
    ?>
  </body>
</html>
