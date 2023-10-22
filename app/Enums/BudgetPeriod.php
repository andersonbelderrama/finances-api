<?php

namespace App\Enums;

enum BudgetPeriod: string
{
    case WEEKLY = 'weekly';
    case MONTHLY = 'monthly';
    case YEARLY = 'yearly';

    public function label(): string
    {
        return match ($this) {
            self::WEEKLY => 'Semanal',
            self::MONTHLY => 'Mensal',
            self::YEARLY  => 'Anual',
        };
    }
}
