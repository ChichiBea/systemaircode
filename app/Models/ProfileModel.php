<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileModel extends Model
{
    // use HasFactory;
        public $table = 'profile';
    
        public $primarykey = 'id';
    
        public $fillable = ['firstname', 'middlename', 'lastname', 'sex', 'email', 'mobilenumber', 'address', 'primaryinstitution', 'position'];
}
