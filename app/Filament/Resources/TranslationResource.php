<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Translation;
use App\Models\TranslationPage;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TranslationResource\Pages;
use App\Filament\Resources\TranslationResource\RelationManagers;
use Filament\Forms\Components\Textarea;

class TranslationResource extends Resource
{
    protected static ?string $model = Translation::class;

    protected static ?string $navigationGroup = 'Переводы';

    protected static ?string $pluralModelLabel = 'Переводы';

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('field')->label('Название поля'),
                Forms\Components\Select::make('page_id')->label('Страница')
                    ->options(TranslationPage::pluck('name', 'id'))
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\Tabs::make('language')->label('Переведенный текст')
                        ->tabs([
                            Forms\Components\Tabs\Tab::make('English')
                            ->schema([
                                Textarea::make('text_en')->label('Text')->required(),
                            ]),
                            Forms\Components\Tabs\Tab::make('Русский')
                            ->schema([
                                Textarea::make('text_ru')->label('Текст')->required(),
                            ]),
                            Forms\Components\Tabs\Tab::make('Украинский')
                            ->schema([
                                Textarea::make('text_uk')->label('Текст')->required(),
                            ]),
                        ]),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page.name')->label('Страница'),
                Tables\Columns\TextColumn::make('field')->label('Название поля')->searchable(),
                Tables\Columns\TextColumn::make('text_uk')->label('Текст UK')->limit(50)->searchable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('page_id')
                    ->options(TranslationPage::pluck('name', 'id'))
                    ->label('Страница')
                    ->placeholder('Все страницы'),
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListTranslations::route('/'),
            'create' => Pages\CreateTranslation::route('/create'),
            'edit' => Pages\EditTranslation::route('/{record}/edit'),
            'byPage' => Pages\ListTranslationsByPage::route('/{slug}'),
        ];
    }


    // Код для создания отдельных вкладок в группе под существующие страницы сайта

    // public static function getNavigationItems(): array
    // {
    //     $items = [];
    
    //     $pages = TranslationPage::all();
    
    //     foreach ($pages as $page) {
    //         $items[] = \Filament\Navigation\NavigationItem::make()
    //             ->label($page->name)
    //             ->url(static::getUrl('byPage', ['slug' => $page->slug]))
    //             ->icon('heroicon-o-document-text')
    //             ->group('Переводы');
    //     }

    //     array_unshift($items, \Filament\Navigation\NavigationItem::make()
    //         ->label('Переводы')
    //         ->url(static::getUrl('index'))
    //         ->icon('heroicon-o-rectangle-stack')
    //         ->group('Переводы')
    //     );
    
    //     return $items;
    // }
    

}
