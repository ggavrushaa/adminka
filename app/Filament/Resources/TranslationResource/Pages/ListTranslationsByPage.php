<?php

namespace App\Filament\Resources\TranslationResource\Pages;

use Log;
use Filament\Actions;
use App\Models\Translation;
use App\Models\TranslationPage;
use Illuminate\Support\Facades\Request;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TranslationResource;

class ListTranslationsByPage extends ListRecords
{
    protected static string $resource = TranslationResource::class;


    protected function getTableQuery(): Builder
    {
        $slug = Request::route('slug');
        $page = TranslationPage::where('slug', $slug)->firstOrFail();

        return parent::getTableQuery()->where('page_id', $page->id);
    }

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
