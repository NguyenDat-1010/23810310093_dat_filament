<?php

namespace App\Filament\Resources\Sv23810310093Products\Pages;

use App\Filament\Resources\Sv23810310093Products\Sv23810310093ProductResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSv23810310093Products extends ListRecords
{
    protected static string $resource = Sv23810310093ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
