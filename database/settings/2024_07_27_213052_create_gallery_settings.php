<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('gallery.huge_image');
        $this->migrator->add('gallery.big_image');
        $this->migrator->add('gallery.first_small_image');
        $this->migrator->add('gallery.second_small_image');
    }
};
