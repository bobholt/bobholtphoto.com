<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php' ?>
  <!-- Add your site or application content here -->

<ul class="portfolioFolders">
	<?php
		foreach (scandir($_SERVER['DOCUMENT_ROOT'].'/portfolio') as $file) {
			if (is_dir($file) && $file != '.' && $file != '..') {

		      	$files = glob($_SERVER['DOCUMENT_ROOT'].'/portfolio/'. $file .'/*.large.jpg');
		      	$randFile = array_rand($files);
		      	$f = $files[$randFile];

				echo '<a href="/portfolio/' . $file . '"><li><img src="' . str_replace('.large.jpg', '.jpg?r', str_replace('C:/development/bobholtphoto', '', $f)) .'" /><p>' . $file . '</p></li></a>';
			}
		}
	?>
</ul>
<div class="clearfix"></div>

<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php' ?>