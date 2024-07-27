<?php

namespace App\Filament\Pages;

use App\Settings\SocialSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class Social extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-link';

    protected static string $settings = SocialSetting::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('facebook'),
                Forms\Components\TextInput::make('youtube'),
                Forms\Components\TextInput::make('tiktok'),
                Forms\Components\TextInput::make('instagram'),
            ]);
    }
}
