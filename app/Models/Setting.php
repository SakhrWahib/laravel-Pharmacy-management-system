<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'val', 'group']; // حقول قابلة للتعبئة

    // يمكنك تعريف العلاقات هنا إذا كانت موجودة
}
