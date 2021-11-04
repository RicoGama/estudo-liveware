<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'plain_id',
        'reference_transaction'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plain()
    {
        return $this->belongsTo(Plain::class);
    }
}
