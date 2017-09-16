<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Activity extends Model
{
    public static function getAll()
    {
    	$activities = $this->DB::table('activities');->get();
    }
}
