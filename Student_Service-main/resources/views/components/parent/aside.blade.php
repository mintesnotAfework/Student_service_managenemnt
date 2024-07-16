<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <x-general.profile/>
    <ul>
        <li>
            <a href='{{route("authentication.logout")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <i class="fas fa-sign-out "></i>
                <span class="ms-3">Logout</span>
            </a>
        </li>
    </ul>
</aside>