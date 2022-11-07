<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValueSeeker extends Model
{
    use HasFactory;
    public function rating()
    {
        return $this->hasOne(Rating::class);
    }
}
