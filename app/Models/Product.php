<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $tabel="products";
    public $timestamps=false;
    
    protected $fillable=[
        'id',
        'article',
        'name',
        'status',
        'data'
       
    ];

    protected $casts = [
        'data' => 'array'
    ];
   
    public function setMetaAttribute($value)
    {
     

        $this->attributes['data'] = json_encode($value);
    }

}
