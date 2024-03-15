@php
    use Filament\Support\Facades\FilamentView;
    use Filament\Support\Facades\FilamentAsset;
@endphp

<div
    ax-load-css="{{ FilamentAsset::getStyleHref('laravel-whiteboard-styles', package: 'ijpatricio/laravel-whiteboard') }}"
    ax-load-src="{{ FilamentAsset::getScriptSrc('laravel-whiteboard-scripts', package: 'ijpatricio/laravel-whiteboard') }}"
>
    <style>
        .fi-modal-content {
            padding: 0;
        }
    </style>

    <x-filament::modal
        class="excalidraw-modal"
        id="edit-whiteboard-modal"
        width="screen"
        displayClasses="'inline-block foobar"
    >
        <div id="whiteboard-editor" wire:ignore></div>
    </x-filament::modal>
</div>

@script
<script>
    setTimeout(() => {
        console.log($wire)

        document.querySelector('tbody div > div > button > span').click()

        window.mountWhiteboard(document.getElementById('whiteboard-editor'), $wire)
    }, 500)
</script>
@endscript
