<?php

namespace App\Enums;

enum AccountType: string
{
    case CURRENT = 'current';
    case SAVINGS = 'savings';
    case INVESTMENT = 'investment';

    public function label(): string
    {
        return match ($this) {
            self::CURRENT => 'Conta Corrente',
            self::SAVINGS => 'Conta Poupança',
            self::INVESTMENT => 'Conta Investimento',
        };
    }
}
