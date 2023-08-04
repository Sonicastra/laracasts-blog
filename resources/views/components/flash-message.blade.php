@props(['key'])

@if ($key === 'success')
    @if (session()->has('success'))
        <div x-data="{ show: true }"
             x-init="setTimeout(() => show = false, 4000)"
             x-show="show"
             class="fixed flex items-center bottom-5 right-5 border border-green-600 bg-white rounded-md shadow-sm text-gray-800 font-semibold text-sm py-2 px-4">
            <i class="fa-regular fa-circle-check text-green-600 mr-3"></i>
            <p>{{ session('success') }}</p>
        </div>
    @endif
@endif