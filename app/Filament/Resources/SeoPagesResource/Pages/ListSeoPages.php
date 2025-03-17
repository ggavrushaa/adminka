<?php

namespace App\Filament\Resources\SeoPagesResource\Pages;

use App\Filament\Resources\SeoPagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSeoPages extends ListRecords
{
    protected static string $resource = SeoPagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
