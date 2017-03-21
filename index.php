<?php
  	if(isset($_POST['stopNum'])){
  		$stopNum = $_POST['stopNum'];
  	}else{
  		$stopNum = 317;
  	}
  	// 243831 Food Science UCC
  	// 317 Westmoreland Street
  	// 3980 Kingsbry
	$url = 'https://data.dublinked.ie/cgi-bin/rtpi/realtimebusinformation?stopid='.$stopNum.'&format=xml';
	$xmlstr = simplexml_load_file($url);
	$stopId = $xmlstr->stopid;
	$count = $xmlstr->numberofresults;
?>

<html>
	<head>
		<title>Bus RealTime</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="css/normalize.css" rel="stylesheet" type="text/css">
	    <link href="css/skeleton.css" rel="stylesheet" type="text/css">
	    <link href="css/custom.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<nav>
		<h1 class="title">Real Time Bus Information</h1>
		<form action="/" method="POST">
			<div class="row">
				<input class="u-full-width search" type="text" placeholder="Stop Number.." name="stopNum" required>
				<input class="button-primary" type="submit" value="Search">
			</div>
		</form>
		</nav>
		<section>
		<p>Last Updated: <?= $xmlstr->timestamp ?> </p>
		<table class="u-full-width">
		  <thead>
		    <th>Stop No.</th>
		    <th>Route</th> 
		    <th>Origin</th>
		    <th>Destination</th>
		    <th>Departing</th>
		  </thead>
		  <tbody>
		  <?php
		  	foreach($xmlstr->results->result as $result){
		  		echo
		  		"<tr>
				  	<td>". $stopId ."</td>
					<td>". $result->route ."</td>
				  	<td>". $result->origin ."</td>
				    <td>". $result->destination ."</td>
				    <td>". $result->departureduetime ."</td> 
			  	</tr>";
		  	}
		  ?>
		 </tbody>
		</table>
		</section>
	</body>
</html>
