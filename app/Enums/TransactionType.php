<?php

namespace App\Enums;

enum TransactionType: string
{
    case INCOME = 'income';
    case EXPENSE = 'expense';
    case TRANSFER = 'transfer';

    public function label(): string
    {
        return match ($this) {
            self::INCOME => 'Receita',
            self::EXPENSE => 'Despesa',
            self::TRANSFER => 'Transferência',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::INCOME => 'green',
            self::EXPENSE => 'red',
            self::TRANSFER => 'yellow',
        };
    }

}
