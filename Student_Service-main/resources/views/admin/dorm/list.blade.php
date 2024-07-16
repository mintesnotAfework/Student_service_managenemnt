<x-admin.admin_layout>
    <div class="min-h-screen">
        <div class="grid md:grid-cols-3 gap-1 grid-wrap sm:grid-cols-1">
            @foreach ($dorms as $dorm)
                <x-admin.dorm.dorm :dorm="$dorm" />
            @endforeach
        </div>
    </div>
</x-admin.admin_layout>