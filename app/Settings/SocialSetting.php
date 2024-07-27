<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SocialSetting extends Settings
{

    public ?string $facebook;
    public ?string $youtube;
    public ?string $tiktok;
    public ?string $instagram;

    public static function group(): string
    {
        return 'social';
    }
}
