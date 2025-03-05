<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Work;
use Filament\Tables;
use App\Models\Service;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Enums\ServiceCategoryEnum;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MultiSelect;
use App\Filament\Resources\ServiceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ServiceResource\RelationManagers;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';
    protected static ?string $pluralModelLabel = 'Услуги';
    protected static ?string $navigationGroup = 'Услуги';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('SEO')
                ->tabs([
                    Forms\Components\Tabs\Tab::make('English')
                        ->schema([
                            TextInput::make('seo_title_en')->label('SEO title'),
                            TextInput::make('seo_desc_en')->label('SEO description'),
                            TextInput::make('seo_h1_en')->label('SEO H1'),
                            TextInput::make('seo_keywords_en')->label('SEO keywords'),
                            RichEditor::make('seo_text_en')->label('SEO text')
                        ]),
                        Forms\Components\Tabs\Tab::make('Русский')
                        ->schema([
                            TextInput::make('seo_title_ru')->label('SEO заголовок'),
                            TextInput::make('seo_desc_ru')->label('SEO описание'),
                            TextInput::make('seo_h1_ru')->label('SEO H1'),
                            TextInput::make('seo_keywords_ru')->label('SEO ключевые слова'),
                            RichEditor::make('seo_text_ru')->label('SEO текст')
                        ]),
                        Forms\Components\Tabs\Tab::make('Українська')
                        ->schema([
                            TextInput::make('seo_title_uk')->label('SEO заголовок'),
                            TextInput::make('seo_desc_uk')->label('SEO опис'),
                            TextInput::make('seo_h1_uk')->label('SEO H1'),
                            TextInput::make('seo_keywords_uk')->label('SEO ключові слова'),
                            RichEditor::make('seo_text_uk')->label('SEO текст')
                        ]),
                    ]),
                Forms\Components\Tabs::make('Languages')
                ->tabs([
                    Forms\Components\Tabs\Tab::make('English')
                        ->schema([
                            TextInput::make('name_en')->label('Title')->required(),
                        ]),
                    Forms\Components\Tabs\Tab::make('Русский')
                        ->schema([
                            TextInput::make('name_ru')->label('Заголовок')->required(),
                        ]),
                    Forms\Components\Tabs\Tab::make('Українська')
                        ->schema([
                            TextInput::make('name_uk')->label('Заголовок')->required(),
                        ]),
                    ]),
                Forms\Components\FileUpload::make('seo_image')->label('SEO картинка (open graph)'),
                Forms\Components\MultiSelect::make('category')->label('Категория')
                ->options(array_combine(ServiceCategoryEnum::values(), ServiceCategoryEnum::values()))
                 ->required(),
                Forms\Components\MultiSelect::make('tech_stacks')->label('Технологии')
                 ->relationship('technologies', 'name')
                 ->preload(),
                 Forms\Components\MultiSelect::make('works')->label('Кейсы')
                 ->relationship('cases', 'title_ru')
                 ->preload(),
                 MultiSelect::make('articles')->label('Статьи')
                 ->relationship('articles', 'name_ru')
                 ->preload(),
                 Forms\Components\Toggle::make('faq_on_site')->label('Добавить вопрос-ответ'),
                 Forms\Components\Toggle::make('show_on_site')->label('Показывать на сайте'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('#'),
                Tables\Columns\TextColumn::make('name_uk')->label('Название'),
                Tables\Columns\TextColumn::make('category')->label('Категория'),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
