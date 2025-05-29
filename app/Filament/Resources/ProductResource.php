<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\Select;
use App\Models\Inspiration;
use Filament\Tables\Columns\TextColumn;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Product Name'),

                Forms\Components\TextInput::make('slug')
                    ->label('Product Slug')
                    ->disabled()
                    ->unique(Product::class, 'slug', fn($record) => $record),


                Forms\Components\Textarea::make('description')
                    ->required()
                    ->label('Product Description'),

                Forms\Components\TextInput::make('size')
                    ->required()
                    ->maxLength(255)
                    ->label('Product Size'),

                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required()
                    ->label('Category'),

                Select::make('inspiration_id')
                    ->label('Inspiration')
                    ->relationship('inspiration', 'name') // pastikan 'name' ada di tabel inspirations
                    ->searchable()
                    ->preload(),

                Forms\Components\FileUpload::make('image') // Menambahkan field untuk gambar
                    ->image() // Menandakan bahwa hanya gambar yang boleh di-upload
                    ->disk('public') // Tentukan disk tempat menyimpan gambar
                    ->directory('products') // Tentukan folder tempat menyimpan gambar
                    ->label('Product Image'),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Product Name')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('slug')
                    ->label('Product Slug')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('description')
                    ->label('Product Description')
                    ->limit(50)
                    ->sortable(),

                Tables\Columns\TextColumn::make('size')
                    ->label('Product Size')
                    ->sortable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category Name')
                    ->sortable(),

                Tables\Columns\ImageColumn::make('image')
                    ->label('Product Image')
                    ->disk('public') // Tentukan disk yang digunakan
                    ->url(fn($record) => $record->image ? Storage::url('products/' . $record->image) : null) // URL gambar mengarah ke 'products/{image}'
                    ->size(50), // Ukuran gambar yang ditampilkan



                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('inspiration.name')
                    ->label('Inspiration')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([/* Filters can be added here */])
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
            // You can define relationships here if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
