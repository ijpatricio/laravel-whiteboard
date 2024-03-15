<?php

namespace Ijpatricio\LaravelWhiteboard\Resources\WhiteboardResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Ijpatricio\LaravelWhiteboard\Livewire\WhiteboardEditor;
use Ijpatricio\LaravelWhiteboard\Resources\WhiteboardResource;

class ListWhiteboards extends ListRecords
{
    protected static string $resource = WhiteboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getFooterWidgets(): array
    {
        return [
            WhiteboardEditor::class,
        ];
    }
}
