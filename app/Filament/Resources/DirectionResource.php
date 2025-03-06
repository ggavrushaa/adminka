<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DirectionResource\Pages;
use App\Filament\Resources\DirectionResource\RelationManagers;
use App\Models\Direction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DirectionResource extends Resource
{
    protected static ?string $model = Direction::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Услуги';
    protected static ?string $pluralModelLabel = 'Направления';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name_uk')->label('Название UK')->required(),
                Forms\Components\TextInput::make('name_ru')->label('Название RU')->required(),
                Forms\Components\TextInput::make('name_en')->label('Название EN')->required(),
                Forms\Components\Toggle::make('show_on_site')->label('Показывать на сайте'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('#'),
                Tables\Columns\TextColumn::make('name_uk')->label('Название UK'),
                Tables\Columns\TextColumn::make('name_ru')->label('Название RU'),
                Tables\Columns\TextColumn::make('name_en')->label('Название EN'),
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
            'index' => Pages\ListDirections::route('/'),
            'create' => Pages\CreateDirection::route('/create'),
            'edit' => Pages\EditDirection::route('/{record}/edit'),
        ];
    }
}
