<?php

class Post extends Eloquent {

    protected $table = 'posts';

    // Validation Rules
    
    public static $rules = array(
    'title'      => 'required|max:100',
    'body'       => 'required|max:10000'
	);

}