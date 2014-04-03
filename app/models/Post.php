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

  public function assignImage($inputFile)
  {
        $file = $inputFile;
        $randompath = str_random(8);
        $destinationPath = public_path().'/upload/'.$randompath;
        $filename = $file->getClientOriginalName();
        $inputFile->move($destinationPath, $filename);
        $this->attributes['image_path'] = "/upload/".$randompath.'/'.$filename;
  }

}