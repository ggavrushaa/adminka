<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnersRequestResource\Pages;
use App\Filament\Resources\PartnersRequestResource\RelationManagers;
use App\Models\Request\PartnerRequest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PartnersRequestResource extends Resource
{
    protected static ?string $model = PartnerRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralModelLabel = 'Форма "Partners"';

    protected static ?string $navigationGroup = 'Заявки';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status', 1)->count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->label('Имя')->required(),
                Forms\Components\TextInput::make('email')->email()->label('Email')->required(),
                Forms\Components\Textarea::make('message')->label('Сообщение')->required(),
                Forms\Components\TextInput::make('position')->label('Должность')->required(),
                Forms\Components\Toggle::make('status')->label('Статус'),
                Forms\Components\Select::make('language')->label('Язык')->options([
                    'ru' => 'Русский',
                    'uk' => 'Украинский', 
                    'en' => 'Английский',
                ])->visible(fn ($record) => $record == null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('#'),
                Tables\Columns\TextColumn::make('name')->label('Имя'),
                Tables\Columns\TextColumn::make('position')->label('Должность'),
                Tables\Columns\TextColumn::make('message')->label('Сообщение'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('created_at')->label('Дата')->date(),
                Tables\Columns\ToggleColumn::make('status')->label('Статус'),
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
            'index' => Pages\ListPartnersRequests::route('/'),
            'create' => Pages\CreatePartnersRequest::route('/create'),
            'edit' => Pages\EditPartnersRequest::route('/{record}/edit'),
        ];
    }
}
