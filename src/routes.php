<?php
	Route::any(Config::get('ucenter::url'), function(){
		return \Goodspb\Ucenter\UcenterApi::execute();
	});
?>
