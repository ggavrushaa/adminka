<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TechStackResource\Pages;
use App\Filament\Resources\TechStackResource\RelationManagers;
use App\Models\TechCategory;
use App\Models\TechStack;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TechStackResource extends Resource
{
    protected static ?string $model = TechStack::class;
    protected static ?string $pluralModelLabel = 'Технологии';
    protected static ?string $navigationGroup = 'Технологии';


    protected static ?string $navigationIcon = 'heroicon-o-code-bracket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->label('Название')->required(),
                Forms\Components\FileUpload::make('image')->label('Картинка')->image()->directory('tech_stacks'),
                Forms\Components\FileUpload::make('image_white')->label('Картинка белая')->image()->directory('tech_stacks'),
                Forms\Components\Select::make('category_id')->label('Категория')
                ->relationship('category', 'name')
                ->required()
                ->createOptionForm([
                    Forms\Components\TextInput::make('name')->label('Название')
                    ->maxLength(255)
                    ->required(),
                ]),
                Forms\Components\Toggle::make('show_on_site')->label('Показывать на сайте'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('#'),
                Tables\Columns\TextColumn::make('name')->label('Название')->searchable(),
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
            'index' => Pages\ListTechStacks::route('/'),
            'create' => Pages\CreateTechStack::route('/create'),
            'edit' => Pages\EditTechStack::route('/{record}/edit'),
        ];
    }
}
