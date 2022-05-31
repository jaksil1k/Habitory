<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "user_id",
        "quantity",
        "goal",
        "days"
    ];

    public function user(){
        return $this->hasOne(User::class, "id", "user_id");
    }
}
