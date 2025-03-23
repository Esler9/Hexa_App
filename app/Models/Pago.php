<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    //

    public function proyecto()
{
    return $this->belongsTo(Proyecto::class);
}

}
