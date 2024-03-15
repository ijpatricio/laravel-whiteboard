<?php

namespace Ijpatricio\LaravelWhiteboard\Resources\WhiteboardResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Ijpatricio\LaravelWhiteboard\Resources\WhiteboardResource;

class EditWhiteboard extends EditRecord
{
    protected static string $resource = WhiteboardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
