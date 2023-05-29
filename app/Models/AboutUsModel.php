<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsModel extends Model
{
    // use HasFactory;
    public $table = 'about_us';

    public $primarykey = 'id';

    public $fillable = ['title', 'content'];
}
