<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Controllers\ServiceController;

class contact extends Model
{
    use HasFactory;
    protected $table = 'contact';
    protected $fillable =['address','phone','mission','whatsapp','email'];
}
