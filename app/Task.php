<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeIncomplete($query, $val)
    {
      //Query Scope to wrap query so can concatenante queries
      return $query->where('completed', 0) ;
    }
}
