<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderStoreRequest;
use App\Models\Dish;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $category = $request->query('category');
        $maxPrice = $request->query('max_price');

        // dump($category);

        $query = Dish::query();

        if ($category) {
            $query->where('category', $category);
        }

        if ($maxPrice) {
            $query->where('price', '<=', $maxPrice * 100);
        }

        $dishes = $query->get();
        return view('orders.index', compact('dishes', 'category', 'maxPrice'));
    }


    public function indexorder(Request $request)
    {
        $orders = Order::all();
        return view('orders.order', compact('orders' ));
    }

    public function isCompleted(Order $order)
    {
        $order->is_completed = now();
        $order->save();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderStoreRequest $request)
    {
        $order = new Order();
        $order -> user_id = Auth::user()->id;
        $order -> save();
        $order->dishes()->sync($request->dish);
        return Redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dish = Dish::findorfail($id);
        return view('orders.showdish', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
     //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $order = Order::findorfail($id);
        $order->dishes()->detach();
        $order->delete();
        return Redirect()->route('orders.index')->with('success', 'verwijderd!');
    }
}
