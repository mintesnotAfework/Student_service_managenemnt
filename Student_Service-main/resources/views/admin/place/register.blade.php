<x-admin.admin_layout>
    <main>
        <section class="bg-gray-50 dark:bg-gray-900">
            <div class="h-screen flex flex-col items-center justify-center px-6 py-8 mx-auto p-10 lg:py-10">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img class="w-8 h-8 mr-2" src="{{ asset('login_background.jpg')}}" alt="logo">
                    Student management and service    
                </a>
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Add Place To The System
                        </h1>
                        <form class="space-y-4 md:space-y-6" method="POST" action="{{route("admin.place.store")}}"  enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">name</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jan Movcov" required value={{old("name")}}>
                                @error("name")
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="map_url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">MAP URL</label>
                                <input type="url" name="map_url" id="map_url" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="https://map.gogole.com/palce_location" required value={{old("map_url")}}>
                                @error("map_url")
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="picture">Picture</label>
                                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="picture" name="picture" type="file" accept="image/*">
                                @error("picture")
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            <button type="submit" class="w-full text-grey-100 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Place</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-admin.admin_layout>