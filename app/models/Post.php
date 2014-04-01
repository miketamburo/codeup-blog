<?php



class Post extends BaseModel {

    protected $table = 'posts';

    // Validation rules
    public static $rules = array(
    'title'      => 'required|max:100',
    'body'       => 'required|max:10000'
	);

}