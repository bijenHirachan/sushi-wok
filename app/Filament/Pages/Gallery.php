<?php

namespace App\Filament\Pages;

use App\Settings\GallerySetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class Gallery extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static string $settings = GallerySetting::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('huge_image'),
                Forms\Components\FileUpload::make('big_image'),
                Forms\Components\FileUpload::make('first_small_image'),
                Forms\Components\FileUpload::make('second_small_image'),
            ]);
    }
}
