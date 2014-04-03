<?php

class Post extends Base {

    protected $table = 'posts';

    /**
      * Validation Rules
      */ 
    public static $rules = array(
    'title'      => 'required|max:100',
    'body'       => 'required|max:10000'
	);

    /**
     * Defines relationship to user (author)
     */
	public function user()
	{
		return $this->belongsTo('User');
	}

}