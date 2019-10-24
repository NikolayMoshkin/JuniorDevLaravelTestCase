<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EducationLevel extends Model
{
    public static function getEductionLevels(){
        return DB::table('education_levels')->get();
    }
}
