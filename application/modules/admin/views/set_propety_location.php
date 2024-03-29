
<!DOCTYPE html>
<html>
<head>
    <title>gmaps.js &mdash; the easiest way to use Google Maps</title>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="../gmaps.js"></script>
    <script type="text/javascript" src="../prettify/prettify.js"></script>
    <link href='//fonts.googleapis.com/css?family=Convergence|Bitter|Droid+Sans|Ubuntu+Mono' rel='stylesheet' type='text/css' />
    <link href='../styles.css' rel='stylesheet' type='text/css' />
    <link href='../prettify/prettify.css' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="examples.css" />
    <script type="text/javascript">
        var map;
        $(document).ready(function(){
            prettyPrint();
            map = new GMaps({
                div: '#map',
                lat: -12.043333,
                lng: -77.028333
            });
        });
    </script>
</head>
<body>
<div id="header">
    <h1>
        <a href="../">gmaps.js</a>
    </h1>
    <h2>Google Maps API with less pain and more fun</h2>
</div>
<div id="body">
    <h3>Basic</h3>
    <div class="row">
        <div class="span11">
            <div class="popin">
                <div id="map"></div>
            </div>
        </div>
        <div class="span6">
            <p>Using GMaps.js is as easy as:</p>
            <pre class="prettyprint">new GMaps({
  div: '#map',
  lat: -12.043333,
  lng: -77.028333
});</pre>
            <p>You must define <strong>container ID</strong>, <strong>latitude</strong> and <strong>longitude</strong> of the map's center.</p>
            <p><span class="label notice">Note</span>You also can define <strong>zoom</strong>, <strong>width</strong> and <strong>height</strong>. By default, zoom is 15. Width an height in a CSS class will replace these values.</p>
            <p><span class="label notice">Note</span>Map types are defined in the <strong>mapType</strong> property. Allowed values are: <strong>roadmap</strong> (default), <strong>satellite</strong>, <strong>hybrid</strong> and <strong>terrain</strong>.</p>
        </div>
    </div>
</div>
</body>
</html>
