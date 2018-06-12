<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{	
    public function feesPayment()
    {
        return $this->hasMany(Fees::class);
    }
}
