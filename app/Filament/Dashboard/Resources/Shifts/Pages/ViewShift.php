<?php

namespace App\Filament\Dashboard\Resources\Shifts\Pages;

use App\Filament\Dashboard\Resources\Shifts\ShiftResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewShift extends ViewRecord
{
    protected static string $resource = ShiftResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
