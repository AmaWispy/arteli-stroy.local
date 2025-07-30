<x-app-layout>
    <x-slot:meta>
        {{ $meta }}
    </x-slot:meta>
    
    {{ $slot }}

    <x-partners />

    @if (Request::is('/'))
        <x-faq-main />
    @endif

    <x-telegram-widget />
</x-app-layout>