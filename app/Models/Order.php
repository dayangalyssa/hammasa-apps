<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'order_code', 'no_telp', 'email', 'alamat', 'kuantitas', 'catatan', 'tipe_baju', 'harga', 'status',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($order) {
            $order->order_code = self::generateOrderCode();
        });
    }

    private static function generateOrderCode() # fungsi untuk buat kode unik 
    {
        $orderCode = 'ORD-' . strtoupper(uniqid());
        while (self::where('order_code', $orderCode)->exists()) {
            $orderCode = 'ORD-' . strtoupper(uniqid());
        }
        return $orderCode;
    }
}
