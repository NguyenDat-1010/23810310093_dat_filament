<?php

namespace App\Filament\Resources\Sv23810310093Products;

use App\Filament\Resources\Sv23810310093Products\Pages\CreateSv23810310093Product;
use App\Filament\Resources\Sv23810310093Products\Pages\EditSv23810310093Product;
use App\Filament\Resources\Sv23810310093Products\Pages\ListSv23810310093Products;
use App\Filament\Resources\Sv23810310093Products\Pages\ViewSv23810310093Product;
use App\Models\Sv23810310093Product;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms;

class Sv23810310093ProductResource extends Resource
{
    protected static ?string $model = Sv23810310093Product::class;

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

            Forms\Components\Select::make('category_id')
                ->relationship('category', 'name')
                ->required(),

            Forms\Components\TextInput::make('price')
                ->numeric()
                ->minValue(0)
                ->required(),

            Forms\Components\TextInput::make('stock_quantity')
                ->numeric()
                ->required(),

            Forms\Components\Select::make('status')
                ->options([
                    'draft' => 'Draft',
                    'published' => 'Published',
                    'out_of_stock' => 'Out of Stock',
                ])
                ->required(),

            Forms\Components\FileUpload::make('image_path')
                ->image()
                ->directory('products'),

            Forms\Components\RichEditor::make('description'),

            Forms\Components\TextInput::make('discount_percent')
                ->numeric()
                ->minValue(0)
                ->maxValue(100),
        ]);
}

    public static function infolist(Schema $schema): Schema
    {
        return $schema;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),

                Tables\Columns\TextColumn::make('price')
                    ->money('VND'),

                Tables\Columns\TextColumn::make('category.name'),

                Tables\Columns\TextColumn::make('stock_quantity'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->relationship('category', 'name'),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSv23810310093Products::route('/'),
            'create' => CreateSv23810310093Product::route('/create'),
            'view' => ViewSv23810310093Product::route('/{record}'),
            'edit' => EditSv23810310093Product::route('/{record}/edit'),
        ];
    }
}