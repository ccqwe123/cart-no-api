<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Locations extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'province','state'
    ];
    protected $table = 'locations';
    
    public function products()
    {
        return $this->hasOne('App\Products');
    }
}
