<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 min-h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700 max-h-screen overflow-y-scroll" aria-label="Sidebar">
    <a href={{route("admin.admin.edit",auth()->user()->admin->id)}} class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
        <x-general.profile/>
    </a>
    <x-admin.admin_list/>
</aside>