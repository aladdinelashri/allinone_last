<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tagproduct extends Model
{
     use HasFactory, SoftDeletes;
    protected $fillable = [
        'Title',
    ];

    protected $dates = ['deleted_at'];

       protected $guarded = array(
        'Title',    );

public function product()
    {
        return $this->belongsToMany(Product::class);
    }

}

