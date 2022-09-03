<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'Title','Description',
    ];

    protected $dates = ['deleted_at'];

       protected $guarded = array(
        'Title','Description',    );


        public function item()
        {
            return $this->belongsTo(Item::class);
        }    

}