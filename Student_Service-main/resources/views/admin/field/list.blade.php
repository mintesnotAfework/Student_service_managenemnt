<x-admin.admin_layout>
    <div class="min-h-screen">
        <div class="grid md:grid-cols-4 gap-1 grid-wrap sm:grid-cols-1">
            @foreach ($fields as $field)
                <x-admin.field.field :field="$field" />
            @endforeach
        </div>
    </div>
</x-admin.admin_layout>