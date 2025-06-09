<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Work;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\WorkResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\WorkResource\RelationManagers;

class WorkResource extends Resource
{
    protected static ?string $model = Work::class;

    protected static ?string $pluralModelLabel = 'Кейсы';

    protected static ?string $navigationIcon = 'heroicon-m-briefcase';
    protected static ?string $navigationBadgeTooltip = 'Количество кейсов';

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
                                TextInput::make('title_en')->label('Title')->required(),
                                TextInput::make('description_en')->label('Description')->required(),
                            ]),
                        Forms\Components\Tabs\Tab::make('Русский')
                            ->schema([
                                TextInput::make('title_ru')->label('Заголовок')->required(),
                                TextInput::make('description_ru')->label('Описание')->required(),
                            ]),
                        Forms\Components\Tabs\Tab::make('Українська')
                            ->schema([
                                TextInput::make('title_uk')->label('Заголовок')->required(),
                                TextInput::make('description_uk')->label('Опис')->required(),
                            ]),
                        ]),
                        Forms\Components\FileUpload::make('image')->label('Картинка')->image()->directory('works'),
                        Forms\Components\FileUpload::make('video')->label('Видео')
                            ->directory('videos')
                            ->maxSize(50000)
                            ->rules(['file', 'max:50000']),
                        Forms\Components\TextInput::make('link')->label('Ссылка')->url(),
                        Forms\Components\TextInput::make('project_type')->label('Тип проекта')->placeholder('Например, mobile app'),
                        Forms\Components\TextInput::make('slug')->label('Слаг')->placeholder('Например, varto'),
                        Forms\Components\Toggle::make('show_on_site')->label('Показывать на сайте'),
                        Forms\Components\Toggle::make('no_work_page')->label('Страница проекта отсутствует'),
                        Forms\Components\Toggle::make('show_in_work_block')->label('Показывать в блоке проектов'),
                        Forms\Components\Toggle::make('show_in_footer')->label('Показывать в футере'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('#'),
                Tables\Columns\TextColumn::make('title_uk')->label('Заголовок'),
                Tables\Columns\ToggleColumn::make('show_on_site')->label('Показывать на сайте')->sortable(),
            ])
            ->reorderable('order_column')
            ->defaultSort('order_column')
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
            'index' => Pages\ListWorks::route('/'),
            'create' => Pages\CreateWork::route('/create'),
            'edit' => Pages\EditWork::route('/{record}/edit'),
        ];
    }
}
