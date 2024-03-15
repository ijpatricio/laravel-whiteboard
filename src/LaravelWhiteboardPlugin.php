<?php

namespace Ijpatricio\LaravelWhiteboard;

use Filament\Contracts\Plugin;
use Filament\Panel;

class LaravelWhiteboardPlugin implements Plugin
{
    public function getId(): string
    {
        return 'laravel-whiteboard';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            Resources\WhiteboardResource::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
