<?php

namespace App\Models;

use App\Enums\AccountType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'bank_name',
        'bank_branch',
        'account_number',
        'account_name',
        'account_status',
        'account_type',
        'balance',
    ];

    protected $casts = [
        'account_status' => 'boolean',
        'account_type' => AccountType::class,
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
