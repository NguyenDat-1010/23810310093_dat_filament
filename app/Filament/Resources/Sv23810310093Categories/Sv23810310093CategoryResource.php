<?php

namespace App\Filament\Resources\Sv23810310093Categories;

use App\Filament\Resources\Sv23810310093Categories\Pages\CreateSv23810310093Category;
use App\Filament\Resources\Sv23810310093Categories\Pages\EditSv23810310093Category;
use App\Filament\Resources\Sv23810310093Categories\Pages\ListSv23810310093Categories;
use App\Filament\Resources\Sv23810310093Categories\Pages\ViewSv23810310093Category;
use App\Filament\Resources\Sv23810310093Categories\Schemas\Sv23810310093CategoryForm;
use App\Filament\Resources\Sv23810310093Categories\Schemas\Sv23810310093CategoryInfolist;
use App\Filament\Resources\Sv23810310093Categories\Tables\Sv23810310093CategoriesTable;
use App\Models\Sv23810310093Category;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;

class Sv23810310093CategoryResource extends Resource
{
    protected static ?string $model = Sv23810310093Category::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
 {
        return $schema
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->live()
                    ->afterStateUpdated(fn ($state, $set) =>
                        $set('slug', \Str::slug($state))
                    ),

                Forms\Components\TextInput::make('slug')
                    ->required(),

                Forms\Components\Textarea::make('description'),

                Forms\Components\Toggle::make('is_visible'),
            ]);
 }

    public static function infolist(Schema $schema): Schema
    {
        return Sv23810310093CategoryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\IconColumn::make('is_visible')->boolean(),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_visible'),
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
            'index' => ListSv23810310093Categories::route('/'),
            'create' => CreateSv23810310093Category::route('/create'),
            'view' => ViewSv23810310093Category::route('/{record}'),
            'edit' => EditSv23810310093Category::route('/{record}/edit'),
        ];
    }
}
