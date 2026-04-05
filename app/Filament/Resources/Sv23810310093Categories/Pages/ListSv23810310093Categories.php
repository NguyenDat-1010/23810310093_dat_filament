<?php

namespace App\Filament\Resources\Sv23810310093Categories\Pages;

use App\Filament\Resources\Sv23810310093Categories\Sv23810310093CategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSv23810310093Categories extends ListRecords
{
    protected static string $resource = Sv23810310093CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
