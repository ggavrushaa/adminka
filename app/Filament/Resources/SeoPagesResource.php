<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\SeoPages;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SeoPagesResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SeoPagesResource\RelationManagers;

class SeoPagesResource extends Resource
{
    protected static ?string $model = SeoPages::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Мови')->tabs([
                    Tab::make('Українська')->schema(components: self::seoFields('uk')),
                    Tabs\Tab::make('English')->schema(self::seoFields('en')),
                    Tabs\Tab::make('Русский')->schema(self::seoFields('ru')),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSeoPages::route('/'),
            'create' => Pages\CreateSeoPages::route('/create'),
            'edit' => Pages\EditSeoPages::route('/{record}/edit'),
        ];
    }

    private static function seoFields($lang): array
    {
        return [
            TextInput::make("seo_title_$lang")->label("SEO Заголовок ($lang)"),
            TextInput::make("seo_h1_$lang")->label("SEO H1 ($lang)"),
            Textarea::make("seo_description_$lang")->label("SEO Опис ($lang)"),
            TextInput::make("seo_keywords_$lang")->label("SEO Ключові слова ($lang)"),
            Textarea::make("seo_text_$lang")->label("SEO текст ($lang)"),

            FileUpload::make("image_$lang")->label("Картинка (імпорт)")->directory('seo_images'),
        ];
    }
}
