<?php echo '<div class="slider-wrapper"><div id="camera_wrap" class="camera_wrap camera_olive_skin">';
foreach ( $slider as $ls ) {
	echo '<div data-thumb="' . __IMG__ . 'galeria/miniatura/' . $ls->imagen . '" data-src="' . __IMG__ . 'galeria/' . $ls->imagen . '">
			<div class="camera_caption fadeFromBottom">
                    <a href="' .site_url("principal/galeria2/".$ls -> id). '">' .$ls -> frase. '</a>
                </div>
		</div>
		';
}
echo '</div>
	<div class="clearfix"></div>
</div>';
?>