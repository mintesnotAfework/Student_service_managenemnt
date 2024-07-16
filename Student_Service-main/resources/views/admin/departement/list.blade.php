<x-admin.admin_layout>
    <div class="min-h-screen">
        <div class="grid md:grid-cols-4 gap-1 grid-wrap sm:grid-cols-1">
            @foreach ($departements as $dept)
                <x-admin.departement.departement :dept="$dept" />
            @endforeach
        </div>
    </div>
</x-admin.admin_layout>