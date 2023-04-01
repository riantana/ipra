<?php 

function url_is($param=''){

	$url=explode('/', uri_string());
	if (array_shift($url)===$param) {
		return 'active';
	}

}