<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_transaction extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function product()
    {
        return $this->belongsTo(product::class);
    }

    public function transaction()
    {
        return $this->belongsTo(transaction::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
