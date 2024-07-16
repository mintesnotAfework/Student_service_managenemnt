<x-admin.admin_layout>
    <div>
        <div class="grid md:grid-cols-4 gap-1 grid-wrap sm:grid-cols-1">
            @foreach ($students as $student)
                <x-admin.student.student :student="$student" />
            @endforeach
        </div>
    </div>
</x-admin.admin_layout>