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
                            Update Campus On The System
                        </h1>
                        <form class="space-y-4 md:space-y-6" method="POST" action="{{route("admin.campus.update")}}">
                            @csrf
                            @method("put")
                            <input type="hidden" name="id" value="{{$campus->id}}"/>
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">name</label>
                                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Poly" required value={{$campus->name}}>
                                @error("name")
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="place" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">place</label>
                                <select name="place" id="place" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                    @foreach ($places as $place)
                                        @if($place->id == $campus->place_id)
                                            <option selected value="{{$place->id}}">{{$place->name}}</option>
                                        @else
                                            <option value="{{$place->id}}">{{$place->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error("place")
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            <button type="submit" class="w-full text-grey-100 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Place Information</button>
                        </form>
                        <a href="{{route("admin.campus.delete",$campus->id)}}">
                            <button type="button" class="w-full mt-5 text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-primary-800">Delete Item</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-admin.admin_layout>