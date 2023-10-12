<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agensi extends Model
{
    use HasFactory;

    protected $table = 'agensi';
    protected $fillable = [
        'name',
        'alamat',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
