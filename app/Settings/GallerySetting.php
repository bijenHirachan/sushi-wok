<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GallerySetting extends Settings
{

    public ?string $huge_image;
    public ?string $big_image;
    public ?string $first_small_image;
    public ?string $second_small_image;

    public static function group(): string
    {
        return 'gallery';
    }
}
