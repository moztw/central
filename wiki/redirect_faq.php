<?php
	$baseurl = "Location: http://wiki.moztw.org/index.php?title=FAQ";

	if (isset($_GET['f']) && !empty($_GET['f'])) $f = intval($_GET['f']);
	else header($baseurl);
	
	switch (true) {
		case (in_array($f, array(2))): // Firefox 特區
			header($baseurl.":Firefox");
			break;
		case (in_array($f, array(9))): // Thunderbird 特區
			header($baseurl.":Thunderbird");
			break;
		case (in_array($f, array(7))): // 關於 Moztw
			header($baseurl.":Mozilla_Taiwan");
			break;
		case (in_array($f, array(11,16,24,25,26,27,28,29,30,31,32,33))): // 擴充套件
			header($baseurl.":Extensions");
			break;
		case (in_array($f, array(3))): // Mozilla Suite
			header($baseurl.":Mozilla_Suite");
			break;
		case (in_array($f, array(5))):
			header($baseurl.":Netscape");
			break;
		case (in_array($f, array(19))): // 使用其他軟體
			header($baseurl.":Other_softwares");
			break;
		case (in_array($f, array(35))): // Camino
			header($baseurl.":Camino");
			break;
		default:
			header($baseurl);
	}
?>
