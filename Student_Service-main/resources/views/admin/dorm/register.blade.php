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
                            Add Dorm To The System
                        </h1>
                        <form class="space-y-4 md:space-y-6" method="POST" action="{{route("admin.dorm.store")}}">
                            @csrf
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">name</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Poly" required value={{old("name")}}>
                                @error("name")
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="building" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Building</label>
                                <select name="building" id="building" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                    @foreach ($buildings as $building)
                                        <option value="{{$building->id}}">{{$building->name}}</option>
                                    @endforeach
                                </select>
                                @error("building")
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="floor_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Floor Number</label>
                                <input type="number" name="floor_number" id="floor_number" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1" required value={{old("name")}}>
                                @error("floor_number")
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            <button type="submit" class="w-full text-grey-100 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Dorm</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        
    </script>
</x-admin.admin_layout>