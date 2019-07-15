<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function barang()
    {
        return $this->hasOne('App\barang', 'id', 'id_barang');
    }
}
