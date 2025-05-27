<?php

namespace App\Filament\Resources\InspirationResource\Pages;

use App\Filament\Resources\InspirationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInspirations extends ListRecords
{
    protected static string $resource = InspirationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
