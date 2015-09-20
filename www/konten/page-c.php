<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Academic Center | UNSERA</title>
	<link rel="shortcut icon" href="../favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/themes/default/jquery.mobile-1.4.5.min.css">
	<script src="../js/jquery.js"></script>
	<script src="../js/jquery.mobile-1.4.5.min.js"></script>
	<script>
		$( document ).on( "pagecreate", function() {
			$( "body > [data-role='panel']" ).panel();
			$( "body > [data-role='panel'] [data-role='listview']" ).listview();
		});
		$( document ).one( "pageshow", function() {
			$( "body > [data-role='header']" ).toolbar();
			$( "body > [data-role='header'] [data-role='navbar']" ).navbar();
		});
	</script>
</head>
<body>

	<div data-role="panel" id="outside" data-display="push" data-theme="b">
		<ul data-role="listview">
			<li data-icon="back"><a href="#" data-rel="close">Close</a></li>
			<li>External panel</li>
			<li>Page C</li>
			<li>Push</li>
		</ul>
	</div>

	<div data-role="header" data-position="fixed" data-theme="a">
		<h1>Academic Center</h1>
		<a href="#outside" data-icon="bars" data-iconpos="notext">Menu</a>
	  <div data-role="navbar">
			<ul>
				<li><a href="index.php">Page A</a></li>
				<li><a href="page-b.php">Page B</a></li>
				<li><a href="page-c.php">Page C</a></li>
			</ul>
		</div>
	</div><!-- /header -->

	<div data-role="page" id="c">

		<div data-role="panel" id="inside-c" data-position="right" data-theme="b">
			<ul data-role="listview">
				<li data-icon="back"><a href="#" data-rel="close">Close</a></li>
				<li>Internal panel</li>
				<li>Page C</li>
				<li>Reveal</li>
			</ul>
		</div>

		<div role="main" class="ui-content">

		<h2>Page C</h2>

		<p>Content</p>

			<p>&nbsp;</p>
			<p><?php
$url = "http://akademik.unsera.ac.id/pdu/modul/pdu_ceknim.php";
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
$contents = curl_exec($ch);
 if (curl_errno($ch)) {
  echo curl_error($ch);
  echo "\n<br />";
  echo "";
  echo "\n<br />";
  echo "\n<hr />";
  $contents = ''; 
} else {
  curl_close($ch);
}

if (!is_string($contents) || !strlen($contents)) {
  echo "Gagal Memuat Modul. Mungkin Disebabkan:";
  echo "\n<br />";
  echo "- Koneksi Internet Tidak Stabil";
  echo "\n<br />";
  echo "- Akses / Traffic Sedang Penuh";
  echo "\n<br />";
  echo "- Modul Sedang Update Versi";
  $contents = '';
}

echo $contents;
?></p>
			
			<p></p>

			<a href="#inside-c" class="ui-btn ui-shadow ui-corner-all ui-btn-inline">Open right panel</a>

		</div><!-- /content -->

		<div data-role="footer" data-position="fixed">
			<div data-role="navbar">
				<ul>
					<li><a href="index.php">Page A</a></li>
					<li><a href="page-b.php">Page B</a></li>
					<li><a href="page-c.php" class="ui-btn-active ui-state-persist">Page C</a></li>
				</ul>
			</div>
		</div><!-- /header -->

	</div><!-- /page -->

</body>
</html>
