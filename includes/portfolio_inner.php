<?php
	$fragments = explode('/', $_SERVER["REQUEST_URI"]);
	$frag = $fragments[sizeof($fragments) - 2];
	include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php'
?>
  <!-- Add your site or application content here -->

<ul class="portfolioFolders">
	<?php
		foreach (scandir($_SERVER['DOCUMENT_ROOT'].'/portfolio/'.$frag) as $file) {
			if (is_file($file) && strpos($file, '.large') && strpos($file, '.jpg')) {

				echo "<script>";
			  $exif = exif_read_data($file, 0, true);
			  $filename = $exif['IFD0']['ImageDescription'];

			    foreach ($exif as $key => $section) {
			      foreach ($section as $name => $val) {
			        echo "console.log('$key.$name: $val');";
			      }
			    }

			    echo "</script>";

				echo '<a href="/portfolio/' .$frag . '/' . $file . '"><li><img src="/portfolio/' .$frag . '/' . $file . '" /><p>' . $filename . '</p></li></a>';
			}
		}
	?>
</ul>
<div class="clearfix"></div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php' ?>