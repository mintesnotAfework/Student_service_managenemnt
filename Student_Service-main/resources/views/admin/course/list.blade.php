<x-admin.admin_layout>
    <div class="min-h-screen">
        <div class="grid md:grid-cols-4 gap-1 grid-wrap sm:grid-cols-1">
            @foreach ($courses as $course)
                <x-admin.course.course :course="$course" />
            @endforeach
        </div>
    </div>
</x-admin.admin_layout>