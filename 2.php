<DOCTYPE html>
<html>
<head>
	<title></title>
	
	<style>
	
	#wrapper {
	background: #3E5151;  /* fallback for old browsers */
	background: -webkit-linear-gradient(to right, #DECBA4, #3E5151);  /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to right, #DECBA4, #3E5151); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */;
	}
	
	</style>
	
</head>
<body>
<div id="wrapper">

	<?php
	
	echo "<h2>The first instance is function defined:</h2>";
	
	function sum($x, $y) {
		$z = $x + $y;
		return $z;
	}
	
	echo "10 + 10 = " . sum(10,10) . "
	<br>";
	echo "100 + 1000 = " . sum(100,1000) . "
	<br>";
	echo "1 + 1 = " . sum(1,1) . "
	<br>";
	
	echo "<h2>
	The second instance is function defined:</h2>";
	
	function setHeight($minheight = 142) {
		echo "The height is : $minheight <br>";
	}
	
	setHeight(203);
	setHeight(783);
	setHeight(20);
	setHeight();
	
	echo "<h2>the third example is defined:</h2>";
	
	function familyName($fname,$year) {
		echo "$fname Refsnes. Born in $year <br>";
	}
	
	familyName("Amar", "1998");
	familyName("Usman", "1996");
	familyName("Zaki", "2002");
	
	echo "<h2>the fourth instance is function defined:</h2>";
	
	function Name($fname) {
    echo "$fname handsome.<br>";
	}

	Name("Zaki");
	Name("Amar");
	Name("Usman");
	Name("Tama");
	Name("Dika");
	
	echo "<h2>The fifth example is a defined function:</h2>";
	
	function read() {
    echo "<h4>Assalamu'alaikum, hello every body!</h4>";
	}

	read();
	
	?>

</div>
</body>
</html>