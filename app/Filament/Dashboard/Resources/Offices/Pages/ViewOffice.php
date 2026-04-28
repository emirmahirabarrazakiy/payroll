<?php

namespace App\Filament\Dashboard\Resources\Offices\Pages;

use App\Filament\Dashboard\Resources\Offices\OfficeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewOffice extends ViewRecord
{
    protected static string $resource = OfficeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
