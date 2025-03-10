<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReviewSourceResource\Pages;
use App\Filament\Resources\ReviewSourceResource\RelationManagers;
use App\Models\ReviewSource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReviewSourceResource extends Resource
{
    protected static ?string $model = ReviewSource::class;
    protected static ?string $pluralModelLabel = 'Источники отзывов';
    protected static ?string $navigationGroup = 'Фидбэк';

    protected static ?string $navigationIcon = 'heroicon-o-folder';

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
            'index' => Pages\ListReviewSources::route('/'),
            'create' => Pages\CreateReviewSource::route('/create'),
            'edit' => Pages\EditReviewSource::route('/{record}/edit'),
        ];
    }
}
