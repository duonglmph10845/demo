<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'rooms';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'introduce',
        'room_type',
        'price',
        'introduce_of_room',
        'status'
        
    ];
    public function imageRoom(){
        return $this->hasMany(ImageRoom::class, 'room_id', 'id');
    }
}
