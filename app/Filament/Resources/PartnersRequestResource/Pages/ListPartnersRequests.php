<?php

namespace App\Filament\Resources\PartnersRequestResource\Pages;

use App\Filament\Resources\PartnersRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartnersRequests extends ListRecords
{
    protected static string $resource = PartnersRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
