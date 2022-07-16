<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function partners()
    {
        return $this->hasMany(Partner::class,'country_id');
    }

    public function success_stories()
    {
        return $this->hasMany(SuccessStory::class,'country_id');
    }

}
