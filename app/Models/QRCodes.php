<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;

use Illuminate\Database\Eloquent\Model;


class QRCodes extends Model 
{
    protected $primaryKey = "id";
    protected $table = "qrcodes";
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'data','status'
    ];







}