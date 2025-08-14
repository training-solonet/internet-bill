<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bill extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'package',
        'month',
        'price',
        'deadline',
        'status'
    ];

    protected $with = [
        'user'
    ];

    public function user(): BelongsTo
   {
    return $this->belongsTo(User::class, 'regist_number', 'regist_number');
   }

   public function scopeCheck(Builder $query, array $bills): void
    {
        $query->when(
            !empty($bills['registId']),
            fn($query) => $query->whereHas('user', function($q) use ($bills) {
                $q->where('regist_number', 'like', "%{$bills['registId']}%");
            })
        )->when(
            !empty($bills['phone']) && preg_match('/^\d{10,15}$/', $bills['phone']),
            fn($query) => $query->whereHas('user', function($q) use ($bills) {
                $q->where('phone_number', 'like', "%{$bills['phone']}%");
            })
        );
    }
}
