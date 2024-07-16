<x-admin.admin_layout>
    <div class="min-h-screen">
        <div class="grid md:grid-cols-4 gap-1 grid-wrap sm:grid-cols-1">
            @foreach ($admins as $admin)
                <x-admin.admin.admin :admin="$admin" />
            @endforeach
        </div>
    </div>
</x-admin.admin_layout>