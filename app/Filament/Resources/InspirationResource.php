<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InspirationResource\Pages;
use App\Filament\Resources\InspirationResource\RelationManagers;
use App\Models\Inspiration;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
class InspirationResource extends Resource
{
    protected static ?string $model = Inspiration::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

public static function form(Form $form): Form
{
    return $form
        ->schema([
            TextInput::make('name')
                ->required()
                ->maxLength(255),

            TextInput::make('slug')
                ->disabled()
                ->maxLength(255)
                ->unique(Inspiration::class, 'slug', ignoreRecord: true),

            FileUpload::make('image_path')
                ->image()
                ->directory('inspirations')
                ->required(),
        ]);
}


    public static function table(Table $table): Table
    {
        return $table
          ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('slug')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('image_path')->label('Image')->square(),
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
            'index' => Pages\ListInspirations::route('/'),
            'create' => Pages\CreateInspiration::route('/create'),
            'edit' => Pages\EditInspiration::route('/{record}/edit'),
        ];
    }
}
