@props(['key'])

@if ($key === 'success')
    @if (session()->has('success'))
        <div x-data="{ show: true }"
             x-init="setTimeout(() => show = false, 4000)"
             x-show="show"
             class="fixed bottom-5 right-5 bg-green-600 rounded-md shadow-sm text-white text-sm py-2 px-4">
            <p>{{ session('success') }}</p>
        </div>
    @endif
@endif