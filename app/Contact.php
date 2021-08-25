<?php

namespace App;

use App\Responce;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function response()
    {
        return $this->hasOne(Responce::class);
    }
}
