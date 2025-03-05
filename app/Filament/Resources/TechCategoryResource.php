<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TechCategoryResource\Pages;
use App\Filament\Resources\TechCategoryResource\RelationManagers;
use App\Models\TechCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TechCategoryResource extends Resource
{
    protected static ?string $model = TechCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-bars-3-bottom-right';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->label('Название')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('#'),
                Tables\Columns\TextColumn::make('name')->label('Название'),
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
            'index' => Pages\ListTechCategories::route('/'),
            'create' => Pages\CreateTechCategory::route('/create'),
            'edit' => Pages\EditTechCategory::route('/{record}/edit'),
        ];
    }
}
