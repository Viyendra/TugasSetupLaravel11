<?php

// app/Models/Order.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'buyer_name',
        'ticket_id',
        'quantity',
        'total_price',
    ];

    // Definisikan relasi ke Ticket
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);  // Relasi belongsTo karena order milik satu tiket
    }
}

