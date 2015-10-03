<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Stream extends Model
{
    protected $fillable = ['url','streaming'];

    public function getStreamingAttribute($value)
    {
        return ($value == 1) ? true : false;
    }
}