<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Decimal;

class Pedido extends Model
{
    protected $table = 'pedidos';

    public $incrementing = true;

    protected $fillable = [
        'user_id',
        'status',
        'total'
    ];

    protected $casts = [
        'total' => 'decimal:2'
    ];

    public function use(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function item(){
        return $this->hasMany(ItemPedido::class, 'pedido_id');
    }
}
