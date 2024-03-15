<?php

namespace Ijpatricio\LaravelWhiteboard\Resources;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Ijpatricio\LaravelWhiteboard\Livewire\WhiteboardEditor;
use Ijpatricio\LaravelWhiteboard\Models\Whiteboard;
use Ijpatricio\LaravelWhiteboard\Resources\WhiteboardResource\Pages\CreateWhiteboard;
use Ijpatricio\LaravelWhiteboard\Resources\WhiteboardResource\Pages\EditWhiteboard;
use Ijpatricio\LaravelWhiteboard\Resources\WhiteboardResource\Pages\ListWhiteboards;

class WhiteboardResource extends Resource
{
    protected static ?string $model = Whiteboard::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('created_at')->dateTime('Y-m-d H:i:s'),
                Tables\Columns\TextColumn::make('updated_at')->dateTime('Y-m-d H:i:s'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('Edit')
                    ->icon('heroicon-o-pencil')
                    ->action(function (Whiteboard $record, $livewire) {
                        $livewire->dispatch('boot-whiteboard-with', whiteboard_id: $record->getKey());
                    }),
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

    public static function getWidgets(): array
    {
        return [
            WhiteboardEditor::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListWhiteboards::route('/'),
            'create' => CreateWhiteboard::route('/create'),
            'edit' => EditWhiteboard::route('/{record}/edit'),
        ];
    }
}
