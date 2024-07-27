<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('social.facebook');
        $this->migrator->add('social.youtube');
        $this->migrator->add('social.tiktok');
        $this->migrator->add('social.instagram');
    }
};
