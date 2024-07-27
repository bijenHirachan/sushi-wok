<?php

namespace App;
use Filament\Support\Contracts\HasLabel;

enum StaffRoleEnum: string implements HasLabel
{
    case CHEF = "chef";

    case HELPER = "helper";

    case WAITER = "waiter";

    case CASHIER = "cashier";

    case MEMBER = "member";

    public function getLabel(): ?string
    {
        return match ($this) {
            self::CHEF => 'Chef',
            self::HELPER => 'Helper',
            self::WAITER => 'Waiter',
            self::CASHIER => 'Cashier',
            self::MEMBER => 'Member',
        };
    }
}
