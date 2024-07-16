<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <a href="#" class="flex ms-2 md:me-24">
                    <img src="{{ asset('login_background.jpg')}}" class="h-8 w-8 me-3 rounded-full" alt="EOL" />
                    <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Student service and management</span>
                </a>
            </div>
            {{-- <div class="flex items-center justify-start trl:justify-end hidden md:block">
                <div class="relative md:block">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Search icon</span>
                    </div>
                    <form method="POST" action="#">
                        @csrf
                        <input name="search" type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
                        <input type="submit" class="inline hidden">
                    </form>
                </div>
            </div> --}}
            <div class="flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
                
                <div class="flex items-center ms-3">
                    <div>
                        <button id="open_user_menu" type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                        <span class="sr-only">User menu</span>
                        <img class="w-8 h-8 rounded-full" src="{{asset('storage/'.auth()->user()->userProfile->profile)}}" alt="user photo">
                        </button>
                    </div>
                    <div id="open_user_hidden" class="fixed right-0 top-8 z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600 max-h-screen overflow-y-scroll" id="dropdown-user">
                        <a href="{{route("admin.admin.edit",auth()->user()->admin->id)}}" >
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    {{auth()->user()->name}}
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    {{auth()->user()->email}}
                                </p>
                            </div>
                        </a>
                        <x-admin.admin_nav_list/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<script>
    document.querySelector("#open_user_menu").addEventListener('click',function(){
       if(document.querySelector("#open_user_hidden").classList.contains("hidden")){
           document.querySelector("#open_user_hidden").classList.remove("hidden")
       }
       else{
           document.querySelector("#open_user_hidden").classList.add("hidden")
       }
   });
</script>