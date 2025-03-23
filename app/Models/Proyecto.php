<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    //

    public function cliente()
{
    return $this->belongsTo(Cliente::class);
}

public function pagos()
{
    return $this->hasMany(Pago::class);
}

}
