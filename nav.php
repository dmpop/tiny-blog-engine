<nav>

	<a href="./index.php"><?php echo $HOME; ?></a>
	
	<div class="block">
	<?php 

	$directory = "./pages/";
	$pages = glob($directory . "*.md");

	foreach($pages as $page)	{
		$path_parts = pathinfo($page);
		$filename = $path_parts['filename'];
		$propername = str_replace('-', ' ', $filename);
		echo '<a href="./page.php?id='.$filename.'">'.$propername.'</a>';
	}
	;?>
	</div>

	<a href="<?php echo $BLOG_LINK; ?>rss.php" class="network">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width=14 height=14 class="icon"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. --><path d="M0 64C0 46.3 14.3 32 32 32c229.8 0 416 186.2 416 416c0 17.7-14.3 32-32 32s-32-14.3-32-32C384 253.6 226.4 96 32 96C14.3 96 0 81.7 0 64zM0 416a64 64 0 1 1 128 0A64 64 0 1 1 0 416zM32 160c159.1 0 288 128.9 288 288c0 17.7-14.3 32-32 32s-32-14.3-32-32c0-123.7-100.3-224-224-224c-17.7 0-32-14.3-32-32s14.3-32 32-32z"/></svg>
	</a>

</nav>