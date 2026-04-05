<?php

namespace App\Filament\Resources\Sv23810310093Categories\Pages;

use App\Filament\Resources\Sv23810310093Categories\Sv23810310093CategoryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSv23810310093Category extends ViewRecord
{
    protected static string $resource = Sv23810310093CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
