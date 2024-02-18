<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;
    protected $table = 'detalle';
    protected $primaryKey = ['factura_id', 'producto_id'];
    protected $keyType = ['int', 'int'];
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable = ['factura_id','producto_id','cantidad','precio_unitario'];
}
