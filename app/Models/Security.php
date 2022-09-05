<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Security extends Model
{
     protected $fillable = [
       'company_name', 'name', 'score','email','content'
    ];
    
    
    /*protected $table = 'reservations[body]';*/
    public function getScore()
    {
        $securities = DB::table('securities')->get();
        return $securities;
    }
}
