<?php

namespace Astersnake\RadioGroup;

use Closure;
use Filament\Forms\Components\Radio;
use Illuminate\Contracts\Support\Arrayable;

class RadioGroup extends Radio
{
    protected array|Arrayable|Closure $icons = [];

    protected array|Arrayable|Closure $iconClasses = [];

    protected string $defaultIconColor = 'text-primary-600';

    protected string $iconSize = 'w-10 h-10';

    protected string $view = 'filament-radio-group::radio-group';

    public function icons(array|Arrayable|Closure $icons): static
    {
        $this->icons = $icons;

        return $this;
    }

    public function hasIcon($value): bool
    {
        return array_key_exists($value, $this->getIcons());
    }

    public function getIcon($value): ?string
    {
        return $this->getIcons()[$value] ?? null;
    }

    public function getIcons(): array
    {
        $icons = $this->evaluate($this->icons);

        if ($icons instanceof Arrayable) {
            $icons = $icons->toArray();
        }

        return $icons;
    }

    public function iconsColor(array|Arrayable|Closure $iconClasses): static
    {
        $this->iconClasses = $iconClasses;

        return $this;
    }

    public function hasIconColor($value): bool
    {
        return array_key_exists($value, $this->getIconsColor());
    }

    public function getIconColor($value): ?string
    {
        return $this->getIconsColor()[$value] ?? $this->defaultIconColor;
    }

    public function getIconClasses($value): ?string
    {
        return $this->getIconColor($value) . ' ' . $this->iconSize;
    }

    public function getIconsColor(): array
    {
        $iconClasses = $this->evaluate($this->iconClasses);

        if ($iconClasses instanceof Arrayable) {
            $iconClasses = $iconClasses->toArray();
        }

        return $iconClasses;
    }
}
