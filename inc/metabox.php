<?php
function csdemo_metaboxes($metaboxes){
	return $metaboxes;
}
add_filter('cs_metabox_options','csdemo_metaboxes');