<?php

namespace App\Filament\Resources\LetsTalkRequestResource\Pages;

use App\Filament\Resources\LetsTalkRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLetsTalkRequests extends ListRecords
{
    protected static string $resource = LetsTalkRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
