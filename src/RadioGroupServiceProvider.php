<?php

namespace Astersnake\RadioGroup;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class RadioGroupServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-radio-group';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-radio-group' => __DIR__.'/../resources/dist/filament-radio-group.css',
    ];

    protected array $scripts = [
        'plugin-filament-radio-group' => __DIR__.'/../resources/dist/filament-radio-group.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-radio-group' => __DIR__ . '/../resources/dist/filament-radio-group.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
