<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Images extends Model
{
    use SoftDeletes;
	public $timestamps = true;
    protected $dates = ['deleted_at'];

    public function crime_reports(){
    	return $this->belongsTo('App\Products','product_id');
    }
}
