<?php

namespace App\Filament\Dashboard\Resources\Attendances\Pages;

use App\Filament\Dashboard\Resources\Attendances\AttendanceResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAttendance extends CreateRecord
{
    protected static string $resource = AttendanceResource::class;
}
