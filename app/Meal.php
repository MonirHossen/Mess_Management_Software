<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $fillable = ['user_id','member_id','break_fast','launch','dinner','meal_date',];

    public function mess_member(){
        return $this->belongsTo(MessMember::class);
    }
}
