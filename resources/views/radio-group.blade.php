<x-dynamic-component
    :component="$getFieldWrapperView()"
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>
    @if ($isInline())
        <x-slot name="labelSuffix">
            @endif
            <x-filament-support::grid
                :default="$getColumns('default')"
                :sm="$getColumns('sm')"
                :md="$getColumns('md')"
                :lg="$getColumns('lg')"
                :xl="$getColumns('xl')"
                :two-xl="$getColumns('2xl')"
                :is-grid="! $isInline()"
                :attributes="$attributes->merge($getExtraAttributes())->class([
            'filament-forms-radio-component',
            'flex flex-wrap gap-3' => $isInline(),
            'gap-2' => ! $isInline(),
        ])"
            >
                @php
                    $isDisabled = $isDisabled();
                @endphp

                @foreach ($getOptions() as $value => $label)
                    <div @class([
                'gap-3' => ! $isInline(),
                'gap-2' => $isInline(),
            ])>
                        <div class="flex items-center">
                            <label for="{{ $getId() }}-{{ $value }}" class="w-full cursor-pointer">
                                <input
                                    name="{{ $getId() }}"
                                    id="{{ $getId() }}-{{ $value }}"
                                    type="radio"
                                    value="{{ $value }}"
                                    dusk="filament.forms.{{ $getStatePath() }}"
                                {{ $applyStateBindingModifiers('wire:model') }}="{{ $getStatePath() }}"
                                {{ $getExtraInputAttributeBag()->class([
                                    'hidden peer',
                                ]) }}
                                {!! ($isDisabled || $isOptionDisabled($value, $label)) ? 'disabled' : null !!}
                                />
                                <div @class([
                            'relative flex items-center cursor-pointer rounded-lg border bg-white p-4 shadow-sm focus:outline-none peer-checked:border-primary-600 peer-checked:border-2 transition duration-150 ease-in-out',
                            'text-gray-800' => ! $errors->has($getStatePath()),
                            'dark:text-gray-200 dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 dark:bg-gray-800 dark:hover:bg-gray-700' => (! $errors->has($getStatePath())) && config('forms.dark_mode'),
                            'text-danger-600' => $errors->has($getStatePath()),
                        ])>
                                    <div class="h-full mr-4 bg-gray-50 rounded-xl p-5">
                                        @if ($icon = $getIcon($value))
                                            <x-dynamic-component :component="$icon" :class="$getIconClass($value)" />
                                        @endif
                                    </div>
                                    <div class="block">
                                        <div class="w-full text-md font-semibold">
                                            {{ $label }}
                                        </div>
                                        <div class="w-full text-xs text-muted">
                                            {{ $getDescription($value) }}
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                @endforeach
            </x-filament-support::grid>
            @if ($isInline())
        </x-slot>
    @endif
</x-dynamic-component>
