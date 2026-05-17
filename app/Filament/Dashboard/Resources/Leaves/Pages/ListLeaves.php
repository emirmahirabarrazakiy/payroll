<?php

namespace App\Filament\Dashboard\Resources\Leaves\Pages;

use App\Filament\Dashboard\Resources\Leaves\LeaveResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Auth;
use League\Uri\Builder;
use Override;

class ListLeaves extends ListRecords
{
    protected static string $resource = LeaveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }


    protected function getTableQuery(): EloquentBuilder|Relation|null
    {
        $query = parent::getTableQuery();

        if (Auth::user()->hasRole('super_admin')) {
            return $query;
        } else {
            return $query->where('user_id', Auth::id());
        }
    }
}
