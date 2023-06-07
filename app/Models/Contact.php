<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ContactController;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'name', 'phone_number', 'avatar', 'gender'];
}
