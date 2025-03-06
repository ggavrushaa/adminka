<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LetsTalkRequestResource\Pages;
use App\Filament\Resources\LetsTalkRequestResource\RelationManagers;
use App\Models\Request\LetsTalkRequest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LetsTalkRequestResource extends Resource
{
    protected static ?string $model = LetsTalkRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $pluralModelLabel = 'Форма "Lets Talk"';

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
                Forms\Components\TextInput::make('position')->label('Должность')->required(),
                    Forms\Components\TextInput::make('company_name')->label('Название компании')->required(),
                    Forms\Components\TextInput::make('project_name')->label('Название проекта')->required(),
                    Forms\Components\TextInput::make('phone')->tel()->label('Телефон')->required(),
                    Forms\Components\TextArea::make('task')->label('Задача')->required(),
                    Forms\Components\TextInput::make('budget')->label('Бюджет')->required(),
                    Forms\Components\TextInput::make('contact_in')->label('Связаться в...')->required(),
                    Forms\Components\TextInput::make('direction')->label('Направление')->required(),
                    Forms\Components\DateTimePicker::make('created_at')->label('Дата'),
                    Forms\Components\FileUpload::make('files')->label('Файлы')
                        ->multiple()
                        ->directory('lets_talk_requests')
                        ->hidden(fn ($record) => $record !== null),
                    Forms\Components\Select::make('language')->label('Язык')->options([
                        'ru' => 'Русский',
                        'uk' => 'Украинский', 
                        'en' => 'Английский',
                    ])->visible(fn ($record) => $record == null),
                    Forms\Components\Toggle::make('status')->label('Статус'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('#'),
                Tables\Columns\TextColumn::make('name')->label('Имя'),
                Tables\Columns\TextColumn::make('company_name')->label('Название компании'),
                Tables\Columns\TextColumn::make('project_name')->label('Название проекта'),
                Tables\Columns\TextColumn::make(name: 'position')->label('Должность'),
                Tables\Columns\TextColumn::make(name: 'phone')->label('Телефон'),
                Tables\Columns\TextColumn::make(name: 'email')->label('Email'),
                Tables\Columns\TextColumn::make(name: 'task')->label('Задача'),
                Tables\Columns\TextColumn::make(name: 'budget')->label('Бюджет'),
                Tables\Columns\TextColumn::make(name: 'contact_in')->label('Связаться в...'),
                Tables\Columns\ImageColumn::make('files')->label('Файлы'),
                Tables\Columns\TextColumn::make(name: 'direction')->label('Направление'),
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
            'index' => Pages\ListLetsTalkRequests::route('/'),
            'create' => Pages\CreateLetsTalkRequest::route('/create'),
            'edit' => Pages\EditLetsTalkRequest::route('/{record}/edit'),
        ];
    }
}
