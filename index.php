<!doctype html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>stellvertreter Live-View</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles.css" />
    <link type="text/css" rel="stylesheet" href="./js/vendor/rickshaw/rickshaw.min.css">
</head>
<body>

<div id="content">

    <h1>stellvertreter LIVE-VIEW</h1>

	<div id="chart-container">
		<div id="chart"></div>
	</div>
    <div id="legend-container">
        <img id="legend-shoes" src="img/legend.png" />
        <div id="legend"></div>
    </div>
	<div id="controls">
		<button id="play">Play</button>
		<button id="pause">Pause</button>
		<button id="reset">Reset</button>
	</div>

	<script src="./js/vendor/d3/d3.js"></script>
	<script src="./js/vendor/rickshaw/rickshaw.min.js"></script>

	<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>

	<script src="js/vendor/URI.js"></script>
    <script src="js/vendor/paho.js"></script>

    <script src="js/helpers.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/connect.js"></script>

</div>

</body>
