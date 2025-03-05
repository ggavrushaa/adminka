<?php

namespace App\Filament\Resources\LetsTalkRequestResource\Pages;

use App\Filament\Resources\LetsTalkRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLetsTalkRequest extends EditRecord
{
    protected static string $resource = LetsTalkRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
