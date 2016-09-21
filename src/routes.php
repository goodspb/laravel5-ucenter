<?php
	Route::any(Config::get('ucenter.url'), function(){
		return \Goodspb\Laravel5Ucenter\UcenterApi::execute();
	});
?>
