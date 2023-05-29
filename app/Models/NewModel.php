<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewModel extends Model
{
    // use HasFactory;
        public $table = 'new';
    
        public $primarykey = 'id';
    
        public $fillable = ['callforproposals', 'typeofproposal', 'proposalclassification', 'projecttitle', 'startdate', 'enddate'];

}
