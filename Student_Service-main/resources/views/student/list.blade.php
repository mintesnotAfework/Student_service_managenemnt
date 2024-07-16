<x-student.layout>
    <div class="grid md:grid-cols-4 gap-1 grid-wrap sm:grid-cols-1 bg-grey-900">
        @php
            $nums = [1,2,5,6,1]
        @endphp
        @foreach($nums as $num)
            <x-parent_student_list></x-parent_student_list>
        @endforeach
    </div>
</x-student.layout>
