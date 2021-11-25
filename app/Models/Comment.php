<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Comment extends Model
{
    use HasFactory;
    use Notifiable, SoftDeletes;
    protected $table = 'comments';
    protected $primaryKey = 'id';

    protected $fillable = [
        'content',
        'room_id',

    ];
}
