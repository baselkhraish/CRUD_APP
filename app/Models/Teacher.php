<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    // الحقول المسموحة مرورها
    // protected $fillable = ['name','email','phone'];
    // الحقول المحظورة من المرور
    protected $guarded=[];
    
}
