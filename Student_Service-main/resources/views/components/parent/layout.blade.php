<x-general.layout>
    {{-- @if(isset(auth()->user()->parent)) --}}
        <main>
            <x-parent.nav/>
            <x-parent.aside/>
            <x-parent.main>
                {{$slot}}
            </x-parent.main>
        </main>
    {{-- @endif --}}
</x-general.layout>