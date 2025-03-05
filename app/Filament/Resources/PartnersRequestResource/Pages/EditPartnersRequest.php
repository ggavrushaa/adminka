<?php

namespace App\Filament\Resources\PartnersRequestResource\Pages;

use App\Filament\Resources\PartnersRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartnersRequest extends EditRecord
{
    protected static string $resource = PartnersRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
