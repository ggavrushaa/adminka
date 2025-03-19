<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Setting;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Pages\SubNavigationPosition;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\SettingResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SettingResource\RelationManagers;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';


    protected static ?string $pluralLabel = 'Настройки';

    protected static ?string $label = 'Настройки';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('key')
                ->label('Ключ')
                ->required()
                ->unique(ignoreRecord: true),

            Section::make('SEO Home Page')->schema([
                Tabs::make('Мови')->tabs([
                    Tab::make('Українська')->schema(components: self::seoFields('uk')),
                    Tabs\Tab::make('English')->schema(self::seoFields('en')),
                    Tabs\Tab::make('Русский')->schema(self::seoFields('ru')),
                ]),
            ]),

            Section::make('Контактні дані')->schema([
                TextInput::make('value.facebook')->label('Facebook')->url(),
                TextInput::make('value.linkedin')->label('LinkedIn')->url(),
                TextInput::make('value.behance')->label('Behance')->url(),
                TextInput::make('value.email')->label('Email')->email(),
                TextInput::make('value.phone_1')->label('Телефон 1'),
                TextInput::make('value.phone_2')->label('Телефон 2'),
            ]),

            Section::make('Пошти для заявок')->schema([
                Repeater::make('value.contact_emails')->label('Contacts')->schema([
                    TextInput::make('contact_email')->email(),
                ])->minItems(1)->maxItems(2),

                Repeater::make('value.letstalk_emails')->label("Let's Talk")->schema([
                    TextInput::make('letstalk_email')->email(),
                ])->minItems(1)->maxItems(2),

                Repeater::make('value.partners_emails')->label("Partners")->schema([
                    TextInput::make('partners_email')->email(),
                ])->minItems(1)->maxItems(2),
            ]),

            Section::make('Коди для сайту')->schema([
                Forms\Components\MarkdownEditor::make('value.head_code')->label('Код у Head'),
                MarkdownEditor::make('value.body_start_code')->label('Код на початку Body'),
            ]),
        ]);
    }

    private static function seoFields($lang): array
    {
        return [
            TextInput::make("value.seo_title_$lang")->label("SEO Заголовок ($lang)"),
            TextInput::make("value.seo_h1_$lang")->label("SEO H1 ($lang)"),
            Textarea::make("value.seo_description_$lang")->label("SEO Опис ($lang)"),
            TextInput::make("value.seo_keywords_$lang")->label("SEO Ключові слова ($lang)"),
            Textarea::make("value.seo_text_$lang")->label("SEO текст ($lang)"),

            FileUpload::make("value.brief_$lang")->label("Бриф (імпорт)")->directory('briefs'),
            FileUpload::make("value.presentation_$lang")->label("Презентація (імпорт)")->directory('presentations'),
            FileUpload::make("value.seo_image_$lang")->label("SEO зображення (імпорт)")->directory('seo_images'),
        ];
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('id')->label('#'),
                Tables\Columns\TextColumn::make('key')->label('Ключ'),
                Tables\Columns\TextColumn::make('value')->label('Значение')
                    ->limit(50)
                    ->copyable()
                    ->copyMessage('Значение скопировано')
                    ->copyMessageDuration(1000),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
