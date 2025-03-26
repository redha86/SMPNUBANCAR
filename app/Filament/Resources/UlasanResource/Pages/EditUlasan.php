<?php

namespace App\Filament\Resources\UlasanResource\Pages;

use App\Filament\Resources\UlasanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUlasan extends EditRecord
{
    protected static string $resource = UlasanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
