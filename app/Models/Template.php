<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;

use Illuminate\Database\Eloquent\Model;


class Template extends Model 
{
    protected $primaryKey = "id";
    protected $table = "template";
    public $timestamps = false;
    protected $fillable = [
        'front', 'back'
    ];







}