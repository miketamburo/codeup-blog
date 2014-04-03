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
    'body'       => 'required|max:10000',
    'image'       => 'image'
	);

    public function assignImage($inputFile) {
        $file = Input::file('image');
        $destinationPath = 'uploads/';
        $filename = str_random(6) . '_' . $file->getClientOriginalName();
        $uploadSuccess = $file->move($destinationPath, $filename);
        $this->attributes['image_path'] = '/' . $destinationPath . $filename; 
    }

}