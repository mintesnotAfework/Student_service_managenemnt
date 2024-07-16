<x-admin.admin_layout>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="{{ asset('login_background.jpg')}}" alt="logo">
                Student Management and Service    
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Delete Cafe
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="post" action={{route("admin.cafe.destory")}}>
                        @csrf
                        @method("delete")
                        <input type="hidden" name="id" value="{{$cafe->id}}">
                        <div class="border-2 p-3 rounded-lg">
                            <div>
                                <img class="rounded-full w-10 h-10" src="{{ asset('storage/'.$cafe->campus->place->picture)}}" alt="image description">
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="picture">{{$cafe->name}}</label>
                            </div>
                            <div>
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="picture">{{$cafe->campus->name}}</label>
                            </div>
                        </div>
                        <button type="submit" class="mb-5 w-full text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-primary-800">Delete Place</button>
                        <a href="#">
                            <button type="button" class="w-full mt-5 text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-primary-800">Go Home</button>
                        </a>
                    </form>

                </div>
            </div>
        </div>
    </section>
</x-admin.admin_layout>