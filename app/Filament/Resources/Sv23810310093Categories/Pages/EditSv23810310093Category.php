<?php

namespace App\Filament\Resources\Sv23810310093Categories\Pages;

use App\Filament\Resources\Sv23810310093Categories\Sv23810310093CategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSv23810310093Category extends EditRecord
{
    protected static string $resource = Sv23810310093CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
