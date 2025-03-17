<?php

namespace App\Filament\Resources\TranslationResource\Pages;

use Filament\Actions;
use App\Models\Translation;
use Illuminate\Support\Facades\Request;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TranslationResource;

class ListTranslations extends ListRecords
{
    protected static string $resource = TranslationResource::class;


    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
