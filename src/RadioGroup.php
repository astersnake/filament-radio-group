<?php

namespace Astersnake\RadioGroup;

use Closure;
use Filament\Forms\Components\Radio;
use Illuminate\Contracts\Support\Arrayable;

class RadioGroup extends Radio
{
    protected array|Arrayable|Closure $icons = [];

    protected array|Arrayable|Closure $iconClasses = [];

    protected string $defaultIconClass = 'w-10 h-10 text-primary-600';

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

    public function iconClasses(array|Arrayable|Closure $iconClasses): static
    {
        $this->iconClasses = $iconClasses;

        return $this;
    }

    public function hasIconClass($value): bool
    {
        return array_key_exists($value, $this->getIconClasses());
    }

    public function getIconClass($value): ?string
    {
        return $this->getIconClasses()[$value] ?? $this->defaultIconClass;
    }

    public function getIconClasses(): array
    {
        $iconClasses = $this->evaluate($this->iconClasses);

        if ($iconClasses instanceof Arrayable) {
            $iconClasses = $iconClasses->toArray();
        }

        return $iconClasses;
    }
}
