@props(['trigger'])

<div x-data="{ show: false }" @click.away="show = false">
    {{-- Trigger --}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    {{-- Links --}}
    <div x-show="show" class="py-2 absolute bg-amber-100 text-amber-800 mt-2 rounded-md shadow-md w-full z-50" style="display: none">
        {{ $slot }}
    </div>
</div>