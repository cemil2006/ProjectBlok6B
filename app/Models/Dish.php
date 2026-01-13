<?php

namespace App\Models;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Dish extends Model
{
    public function orders()
    {
        return $this ->belongsToMany(Order::class,'orders_dishes');
    }
}
