<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomepageBudaya extends Model
{
    use HasFactory;

    protected $table = 'homepagebudaya';

    protected $fillable = [
        'gambar_banner',
        'gambar_welcome',
        'deskripsi_welcome',
    ];

    public $timestamps = true;
}