<?php 
	echo "<h1>HELLO WORLD</h1> <br>";
	echo "<h4>HELLO HUẾ</h4>";
	$ten = "Nguyễn Thị Nguyệt Minh";
	echo "Xin chào ".$ten;
	echo '<h2>Phạm Thị Huế</h2>';
	echo "<h2>$ten</h2>";
	echo '<h2>$ten</h2>';

	define("NAME", "HUẾ");
	echo NAME;

	$a = 10;
	if ($a % 2 == 0)
		echo "<br>Đây là số chẵn";
	else 
		echo "<br>Đây là số lẻ";
	$thu = 2;
	switch (4thu) {
		case 2
			echo "Hôm nay là thứ hai";
			break;
		case 3
			echo "Hôm nay là thứ ba";
			break;
		case 4: 
			echo "Hôm nay là thứ tư";
			break;
	}
	//Vòng for
	//Vòng while
	//Vòng foreach
	//comment
?>