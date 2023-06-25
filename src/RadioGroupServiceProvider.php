<?php

namespace Astersnake\RadioGroup;

use Composer\InstalledVersions;
use Filament\PluginServiceProvider;
use OutOfBoundsException;
use Spatie\LaravelPackageTools\Package;

class RadioGroupServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-radio-group';

    public static string $version = 'dev';

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
        try {
            static::$version = InstalledVersions::getPrettyVersion('astersnake/filament-radio-group');
        } catch (OutOfBoundsException $e) {
        }

        $package->name(static::$name)
            ->hasViews();
    }
}
