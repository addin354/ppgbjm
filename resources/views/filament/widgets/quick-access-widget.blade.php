<x-filament-widgets::widget class="fi-quick-access-widget">
    <x-filament::section
        compact
        :heading="'Aksi cepat'"
        :description="'Pintasan ke form dan daftar yang paling sering dipakai.'"
    >
        <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 sm:gap-4 lg:grid-cols-3">
            @foreach ($actions as $action)
                <x-filament::button
                    :href="$action['href']"
                    outlined
                    :icon="$action['icon'] ?? null"
                    :color="$action['color'] ?? 'gray'"
                    tag="a"
                    class="w-full justify-center"
                >
                    {{ $action['label'] }}
                </x-filament::button>
            @endforeach
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
