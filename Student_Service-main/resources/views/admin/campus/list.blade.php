<x-admin.admin_layout>
    <div class="min-h-screen">
        <div class="grid md:grid-cols-3 gap-1 grid-wrap sm:grid-cols-1">
            @foreach ($campuses as $campus)
                <x-admin.campus.campus :campus="$campus" />
            @endforeach
        </div>
    </div>
</x-admin.admin_layout>