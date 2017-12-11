<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companies extends Model {
	protected $table = 'companies';

	public function companies() {
		return $this->belongsTo('App\User');
	}

	public function employee() {
		return $this->hasMany('App\employee', 'main_id');
	}
	public function sale() {
		return $this->hasMany('App\sale', 'main_id');
	}

	public function products() {
		return $this->hasMany('App\products', 'main_id');
	}

	public function client() {
		return $this->hasMany('App\client', 'main_id');
	}

	public function category() {
		return $this->hasMany('App\categories', 'main_id');
	}

	public function order() {
		return $this->hasMany('App\orders', 'coid');
	}

}
