<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function detail_transaction()
    {
        return $this->hasMany(detail_transaction::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
