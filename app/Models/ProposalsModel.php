<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProposalsModel extends Model
{
    
    // use HasFactory;
    public $table = 'proposals';

    public $primarykey = 'id';

    public $fillable = ['callforproposals', 'startdate', 'enddate', 'yeartobefunded', 'fundingagency', 'status', 'remarks'];

}
