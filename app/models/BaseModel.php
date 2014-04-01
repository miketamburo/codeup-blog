<?php

use Carbon\Carbon;

class BaseModel extends Eloquent {

	public function getCreatedAtAttribute($value) {
    	$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone(Config::get('app.localTimezone'));
	}

	public function getUpdatedAtAttribute($value) {
    	$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone(Config::get('app.localTimezone'));
    	// other option is: return $utc->setTimezone('America/Chicago');
	}

}