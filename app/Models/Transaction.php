<?php

namespace App\Models;

use App\Enums\TransactionType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'amount',
        'transaction_type',
        'is_investment',
        'has_been_paid',
        'payment_date',
        'due_date',
        'category_id',
        'user_id',
        'account_id',
    ];

    protected $casts = [
        'is_investment' => 'boolean',
        'has_been_paid' => 'boolean',
        'transaction_type' => TransactionType::class,
    ];

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function account() : BelongsTo
    {
        return $this->belongsTo(Account::class);
    }
}
