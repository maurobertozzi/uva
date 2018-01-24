<html>
<head>
	<meta charset="UTF-8">
	<title>order ride</title>
	<link rel="stylesheet" href="orderride1style.css">
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h5>&#8592;back</h5>
<h2>How many people?</h2>

<div class="slidecontainer">
  <input type="range" min="1" max="5" value="50" class="slider" id="myRange">
  <p><span id="demo"></span></p>
</div>
<h2>Which route?</h2>
<div class="btn-group">
  <button id="buttonCheapest">Cheapest</button>
  <button id="buttonFastest">Fastest</button>
  <button id="buttonScenic">Scenic</button>
</div>
<img src="https://www.wired.com/wp-content/uploads/2016/11/GoogleMapTA.jpg" alt="">
<button id="ContinueButton">Continue</button>
<script src="script.js"></script>
</body>
</html>