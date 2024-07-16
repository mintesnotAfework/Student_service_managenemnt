<x-admin.admin_layout>
    <div class="min-h-screen">
        <div class="grid md:grid-cols-4 gap-1 grid-wrap sm:grid-cols-1">
            @foreach ($classes as $class)
                <x-admin.class.class :class="$class" />
            @endforeach
        </div>
    </div>
</x-admin.admin_layout>