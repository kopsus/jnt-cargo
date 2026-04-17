<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'whatsapp_number',
        'whatsapp_text',
        'duration_minutes',
        'is_active',
    ];
}