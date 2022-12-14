<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
     use HasFactory, SoftDeletes;
    protected $fillable = [
        'Title','Description',
    ];

    protected $dates = ['deleted_at'];

       protected $guarded = array(
        'Title', 'Description',   );


    public function item()
    {
        return $this->belongsToMany(Item::class);
    }

     public function categoryproduct()
    {
        return $this->belongsToMany(Categoryproduct::class);
    }

     public function tagproduct()
    {
        return $this->belongsToMany(Tagproduct::class);
    }
}
