<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tagitem extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'Title',
    ];

    protected $dates = ['deleted_at'];

       protected $guarded = array(
        'Title',    );

       public function item()
    {
        return $this->belongsToMany(Item::class);
    }
}
