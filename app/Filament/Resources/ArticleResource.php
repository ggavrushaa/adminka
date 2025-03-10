<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $pluralModelLabel = 'Блог';
    protected static ?string $navigationBadgeTooltip = 'Количество статей';

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
                    Forms\Components\Tabs\Tab::make('English')->label('English')
                    ->schema([
                        Forms\Components\TextInput::make('name_en')->label('Заголовок')->required(),
                        Forms\Components\RichEditor::make('text_en')->label('Текст')->required(),
                    ]),
                    Forms\Components\Tabs\Tab::make('Русский')->label('Русский')
                    ->schema([
                        Forms\Components\TextInput::make('name_ru')->label('Заголовок')->required(),
                        Forms\Components\RichEditor::make('text_ru')->label('Текст')->required(),
                    ]),
                    Forms\Components\Tabs\Tab::make('Українська')->label('Українська')
                    ->schema([
                        Forms\Components\TextInput::make('name_uk')->label('Заголовок')->required(),
                        Forms\Components\RichEditor::make('text_uk')->label('Текст')->required(),
                    ]),
                ]),
                    Forms\Components\Tabs::make('SEO')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('English')->label('English')
                        ->schema([
                            Forms\Components\TextInput::make('seo_title_en')->label('SEO Title'),
                            Forms\Components\TextInput::make('seo_h1_en')->label('SEO H1'),
                            Forms\Components\TextInput::make('seo_desc_en')->label('SEO Description'),
                            Forms\Components\TextInput::make('seo_keywords_en')->label('SEO Keywords'),
                            Forms\Components\TextInput::make(name: 'seo_text_en')->label('SEO Text'),
                        ]),
                        Forms\Components\Tabs\Tab::make('Русский')->label('Русский')
                        ->schema([
                            Forms\Components\TextInput::make('seo_title_ru')->label('SEO Заголовок'),
                            Forms\Components\TextInput::make('seo_h1_ru')->label('SEO H1'),
                            Forms\Components\TextInput::make('seo_desc_ru')->label('SEO Описание'),
                            Forms\Components\TextInput::make('seo_keywords_ru')->label('SEO Ключевые слова'),
                            Forms\Components\TextInput::make(name: 'seo_text_ru')->label('SEO Текст'),
                        ]),
                        Forms\Components\Tabs\Tab::make('Українська')->label('Українська')
                        ->schema([
                            Forms\Components\TextInput::make('seo_title_uk')->label('SEO Заголовок'),
                            Forms\Components\TextInput::make('seo_h1_uk')->label('SEO H1'),
                            Forms\Components\TextInput::make('seo_desc_uk')->label('SEO Опис'),
                            Forms\Components\TextInput::make('seo_keywords_uk')->label('SEO Ключеві слова'),
                            Forms\Components\TextInput::make(name: 'seo_text_uk')->label('SEO Текст'),
                        ]),
                    ]),
                    Forms\Components\MultiSelect::make('tags')->label('Теги')
                    ->relationship('tags', 'name')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')->label('Название')
                        ->maxLength(255)
                        ->required(),
                    ]),
                    Forms\Components\MultiSelect::make('case')->label('Кейсы')
                    ->relationship('cases', 'title_uk')
                    ->searchable()
                    ->preload(),
                    Forms\Components\MultiSelect::make('services')->label('Услуги')
                    ->relationship('services', 'name_uk')
                    ->searchable()
                    ->preload(),
                    Forms\Components\FileUpload::make('image')->label('Картинка')->directory('articles'),
                    Forms\Components\FileUpload::make('seo_image')->label('Картинка OpenGraph')->directory('articles_seo'),
                    Forms\Components\Toggle::make('show_on_site')->label('Показывать на сайте'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('#'),
                Tables\Columns\TextColumn::make('name_ru')->label('Заголовок'),
                Tables\Columns\TextColumn::make('views')->label('Кол-во просмотров'),
                Tables\Columns\TagsColumn::make('tags.name')->label('Теги'),
                Tables\Columns\TextColumn::make('created_at')->label('Дата'),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
