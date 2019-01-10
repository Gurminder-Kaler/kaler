<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=['id','product_name','product_id','description', 'product_price','is_active','created_at','updated_at'];

public function user()
{
    return $this->belongsTo('App\User');
}
}
