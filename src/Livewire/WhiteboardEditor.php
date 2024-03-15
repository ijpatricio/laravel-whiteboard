<?php

namespace Ijpatricio\LaravelWhiteboard\Livewire;

use Filament\Widgets\Widget;
use Ijpatricio\LaravelWhiteboard\Models\Whiteboard;
use Livewire\Attributes\On;

class WhiteboardEditor extends Widget
{
    protected static string $view = 'laravel-whiteboard::livewire.whiteboard-editor';

    protected int | string | array $columnSpan = 'full';

    public ?Whiteboard $whiteboard = null;

    #[On('boot-whiteboard-with')]
    public function bootWhiteboardWith($whiteboard_id): void
    {
        if ($this->whiteboard?->id !== $whiteboard_id) {
            $this->whiteboard = Whiteboard::find($whiteboard_id);
        }

        $this->dispatch('open-modal', id: 'edit-whiteboard-modal');
    }

    public function load()
    {
        //        return $this->whiteboard?->data;

        return Whiteboard::first()->data;
    }

    public function store($data)
    {
        $this->whiteboard->update(['data' => $data]);
    }
}
