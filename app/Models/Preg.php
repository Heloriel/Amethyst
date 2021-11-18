<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Carbon;

class Preg extends Model
{
    use HasFactory;

    public function setDateAttribute($value) {
        $formatted_date = str_replace('/','-', $value);
        $this->attributes['date'] = Carbon::parse($formatted_date)->format('Y-m-d');
    }
}
