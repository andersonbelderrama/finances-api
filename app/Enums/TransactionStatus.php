<?php

namespace App\Enums;

enum TransactionStatus: string
{   //'pending, paid, overdue, received'
    case PENDING = 'pending';
    case PAID = 'paid';
    case OVERDUE = 'overdue';
    case RECEIVED = 'received';

    public function label(): string
    {
        return match ($this) {
            self::PENDING => 'Pendente',
            self::PAID => 'Pago',
            self::OVERDUE => 'Em atraso',
            self::RECEIVED => 'Recebido',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::PENDING => 'red',
            self::PAID => 'green',
            self::OVERDUE => 'yellow',
            self::RECEIVED => 'green',
        };
    }

}
