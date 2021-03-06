<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessExpense extends Model
{
    protected $fillable = [
        'user_id',
        'member_id',
        'expense_date',
        'amount',
    ];

    public function mess_member(){
        return $this->belongsTo(MessMember::class);
    }
}
