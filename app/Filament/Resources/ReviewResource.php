<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Review;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ReviewResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ReviewResource\RelationManagers;
use App\Models\ReviewSource;

class ReviewResource extends Resource
{
    protected static ?string $model = Review::class;
    protected static ?string $pluralModelLabel = 'Отзывы';

    protected static ?string $navigationIcon = 'heroicon-o-star';
    protected static ?string $navigationBadgeTooltip = 'Количество отзывов';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('Languages')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('English')
                            ->schema([
                                TextInput::make('quote_en')->label('Quote')->required(),
                                TextInput::make('text_en')->label('Text')->required(),
                            ]),
                        Forms\Components\Tabs\Tab::make('Русский')
                            ->schema([
                                TextInput::make('quote_ru')->label('Цитата')->required(),
                                TextInput::make('text_ru')->label('Текст')->required(),
                            ]),
                        Forms\Components\Tabs\Tab::make('Українська')
                            ->schema([
                                TextInput::make('quote_uk')->label('Цитата')->required(),
                                TextInput::make('text_uk')->label('Текст')->required(),
                            ]),
                    ]),
                Forms\Components\Select::make('rating')->label('Оценка')->options([
                    1 => '1',
                    2 => '2',
                    3 => '3',
                    4 => '4',
                    5 => '5',
                ])->required(),
                Forms\Components\TextInput::make('author')->label('Автор')->required(),
                Forms\Components\TextInput::make('position')->label('Должность'),
                Forms\Components\TextInput::make('project_name')->label('Название проекта')->required(),
                Forms\Components\TextInput::make('link')->label('Ссылка')->url(),
                Forms\Components\Select::make('source_id')->label('Сайт')
                    ->options(ReviewSource::all()->pluck('name', 'id'))
                    ->searchable(),
                Forms\Components\Toggle::make('show_on_site')->label('Показывать на сайте'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('#'),
                Tables\Columns\TextColumn::make('project_name')->label('Название проекта'),
                Tables\Columns\TextColumn::make('rating')->label('Оценка'),
                Tables\Columns\TextColumn::make('source.name')->label('Источник отзыва'),
                Tables\Columns\TextColumn::make('text_uk')->label('Текст')->limit(50),
                Tables\Columns\ToggleColumn::make('show_on_site')->label('Показывать на сайте'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListReviews::route('/'),
            'create' => Pages\CreateReview::route('/create'),
            'edit' => Pages\EditReview::route('/{record}/edit'),
        ];
    }

}
