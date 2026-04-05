<?php

namespace App\Filament\Resources\Sv23810310093Products\Pages;

use App\Filament\Resources\Sv23810310093Products\Sv23810310093ProductResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSv23810310093Product extends EditRecord
{
    protected static string $resource = Sv23810310093ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
