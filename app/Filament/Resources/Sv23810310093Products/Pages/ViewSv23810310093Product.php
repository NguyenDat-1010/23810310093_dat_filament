<?php

namespace App\Filament\Resources\Sv23810310093Products\Pages;

use App\Filament\Resources\Sv23810310093Products\Sv23810310093ProductResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSv23810310093Product extends ViewRecord
{
    protected static string $resource = Sv23810310093ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
