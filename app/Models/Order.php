<?php




namespace App\Models;
use App\Models\User;
use App\Models\Dish;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function dishes()
    {
        return $this->belongsToMany(Dish::class, 'orders_dishes');
    }
}
