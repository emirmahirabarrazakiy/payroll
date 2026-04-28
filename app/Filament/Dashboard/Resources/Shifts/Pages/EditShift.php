<?php

namespace App\Filament\Dashboard\Resources\Shifts\Pages;

use App\Filament\Dashboard\Resources\Shifts\ShiftResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditShift extends EditRecord
{
    protected static string $resource = ShiftResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
