<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'admin_email','admin_password','admin_name','admin_phone','admin_address','admin_avatar'
    ];
    protected $primaryKey = 'admin_id';
    protected $table = 'dtb_member';
}
