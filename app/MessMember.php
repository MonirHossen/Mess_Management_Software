<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessMember extends Model
{
    protected $fillable =  ['name','email','phone','image'];

    public function meals()
    {
        return $this->hasMany(Meal::class);
    }
    public function mess_expense(){
        return $this->hasMany(MessExpense::class);
    }
}
