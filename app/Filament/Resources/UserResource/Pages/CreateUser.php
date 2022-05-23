<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard\Step;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    use CreateRecord\Concerns\HasWizard;

    protected static string $resource = UserResource::class;

    protected function getSteps(): array
    {
        return [
            Step::make('Cuenta')
                ->description('Datos de la Cuenta')
                ->schema([
                    TextInput::make('name')
                        ->required(),
                    TextInput::make('email')
                        ->required(),
                    TextInput::make('password')
                        ->required(),
                ]),
            Step::make('Personal')
                ->description('Información personal del usuario')
                ->schema([
                    TextInput::make('phone'),
                    TextInput::make('address'),
                ]),
            Step::make('Social')
                ->description('Datos de Redes Sociales')
                ->schema([
                    TextInput::make('facebook_profile'),
                    TextInput::make('instagram_profile'),
                ]),
        ];
    }
}
