<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function create(CreateOrderRequest $request)
    {
        try {
            $product = Product::find($request->input('product_id'));
            $order = Order::create($request->all() + ['user_id' => Auth::user()->id, 'total' => $request->input('quantity') * $product->price]);
            return response($order);
        } catch (\Exception $exception) {
            dd($exception->getMessage());
            return response(['message' => 'An error occurred.'], 500);
        }
    }

    public function store()
    {
        $orders = Order::getFromUserId();
        if(count($orders) > 0) {
            return response($orders);
        } else {
            return response([], 204);
        }
    }

    public function put($orderId, UpdateOrderRequest $request)
    {
        if ($order = Order::firstFromId($orderId)) {
            if(strtotime($order->shipping_date) > strtotime('today')) {
                $product = Product::find($request->input('product_id'));
                $order->update($request->all() + ['total' => $request->input('quantity') * $product->price]);

                return response($order);
            } else {
                return response(['message' => 'You cannot update an outdated order']);
            }
        } else {
            return response(['message' => 'Order not found'], 404);
        }
    }

    public function get($orderId)
    {
        if($order = Order::firstFromId($orderId)) {
            return response($order);
        } else {
            return response(['message' => 'Order not found'], 404);
        }
    }

}
