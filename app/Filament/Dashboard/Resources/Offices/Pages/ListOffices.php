<?php

namespace App\Filament\Dashboard\Resources\Offices\Pages;

use App\Filament\Dashboard\Resources\Offices\OfficeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOffices extends ListRecords
{
    protected static string $resource = OfficeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
