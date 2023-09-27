<?php

if(!function_exists("generateUniqueToken")){

    function generateUniqueToken($size = 10,$table = null,$column = null)
    {
	     $token = str_random($size);

	     if($table && \DB::table($table)->where($column,$token)->count()){
		      generateUniqueToken($size, $table, $column);
	     }

	     return $token;
    }
}