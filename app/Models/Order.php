<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'user_id',
        'product_id',
        'quantity',
        'total',
        'address',
        'shipping_date'
    ];

    protected $casts = [
        'shipping_date' => 'date'
    ];

    public static function getFromUserId()
    {
        return self::where('user_id', Auth::user()->id)->get();
    }

    public static function firstFromId(int $orderId)
    {
        return self::where([['user_id', Auth::user()->id], ['id', $orderId]])->first();
    }

}
