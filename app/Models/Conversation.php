<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_one',
        'user_two',
    ];

    public function userOne()
    {
        return $this->hasOne(User::class, 'id', 'user_one');
    }

    public function userTwo()
    {
        return $this->hasOne(User::class, 'id', 'user_two');
    }

    public function messages()
    {
        return $this->hasMany(Message::class, 'conversation_id', 'id');
    }

    public function messageNotSeen()
    {
        return $this->hasMany(Message::class, 'conversation_id', 'id')->where('is_seen', 0)->where('user_id', '!=', auth()->id());
    }
}
