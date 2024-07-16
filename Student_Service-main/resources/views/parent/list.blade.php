<x-parent.layout>    
    <div class="grid md:grid-cols-4 gap-1 grid-wrap sm:grid-cols-1 bg-grey-900">
        @foreach($students as $student)
            <x-parent.list_layout :student="$student"/>
        @endforeach
    </div>
</x-parent.layout>