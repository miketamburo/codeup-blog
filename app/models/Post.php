<?php



class Post extends BaseModel {

    protected $table = 'posts';
    // Relationship to the user (author) 
    public function user(){
    	return $this->belongsTo('User');
    }

    // Validation rules
    public static $rules = array(
    'title'      => 'required|max:100',
    'body'       => 'required|max:10000'
	);

}