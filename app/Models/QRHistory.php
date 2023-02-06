<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;

use Illuminate\Database\Eloquent\Model;


class QRHistory extends Model 
{
    protected $primaryKey = "id";
    protected $table = "qr_history";
    public $timestamps = false;
    protected $fillable = [
        'id', 'key'
    ];

}