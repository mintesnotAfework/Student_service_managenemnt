<x-student.layout>
    <div>
        <div class="mb-5 flex justify-content-center flex-col w-full shadow-sm rounded-xl md:ml-30 lg:p-12 dark:bg-gray-900 dark:text-gray-50">
            <div class="flex flex-col w-full">
                <h2 class="text-7xl font-semibold text-center border-b-2">Student Information</h2>
                <div class="flex flex-col mt-4">
                    <table>
                        <tr>
                            <td>
                                <div class="flex items-center space-x-1 m-3">
                                    <span class="flex-shrink-0 text-5xl">
                                        <img class="rounded-full w-50 h-50" src="{{ asset( 'storage/'. $parent->user->userProfile->profile) }}" alt="image description">
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="flex items-center space-x-1 m-1">
                                    <span class="flex-shrink-0 text-5xl">Name : 
                                        <span class="dark:text-orange-500">
                                            <b>{{$parent->user->userProfile->full_name}}</b>
                                        </span>
                                    </span> 
                                </div>
                                <div class="flex items-center space-x-1 m-1">
                                    <span class="flex-shrink-0 text-5xl">Username : 
                                        <span class="dark:text-orange-500 ">
                                            <b>{{$parent->user->name}}</b>
                                        </span>
                                    </span>
                                </div>
                                <div class="flex items-center space-x-1 m-1">
                                    <span class="flex-shrink-0 text-5xl">Email : 
                                        <span class="dark:text-orange-500 ">
                                            <b>{{$parent->user->email}}</b>
                                        </span>
                                    </span>
                                </div>
                                <div class="flex items-center space-x-1 m-1">
                                    <span class="flex-shrink-0 text-5xl">Id : 
                                        <span class="dark:text-orange-500 ">
                                            <b>{{$parent->user->userProfile->special_id}}</b>
                                        </span>
                                    </span>
                                </div>
                                <div class="flex items-center space-x-1 m-1">
                                    <span class="flex-shrink-0 text-5xl">Birthday : 
                                        <span class="dark:text-orange-500 ">
                                            <b>{{$parent->user->userProfile->birthday}}</b>
                                        </span>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="mx-20 mt-10 flex justify-content-center flex-col w-5/6 p-8 shadow-sm rounded-xl md:ml-30 lg:p-12 dark:bg-gray-900 dark:text-gray-50">
            <div class="flex flex-col w-full">
                <h2 class="text-3xl font-semibold text-center">Customer reviews</h2>
                <div class="flex flex-wrap items-center mt-2 mb-1 space-x-2">
                    <div class="flex">
                        <button type="button" title="Rate 1 stars" aria-label="Rate 1 stars">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 dark:text-yellow-700">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </button>
                        <button type="button" title="Rate 2 stars" aria-label="Rate 2 stars">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 dark:text-yellow-700">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </button>
                        <button type="button" title="Rate 3 stars" aria-label="Rate 3 stars">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 dark:text-yellow-700">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </button>
                        <button type="button" title="Rate 4 stars" aria-label="Rate 4 stars">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 dark:text-gray-400">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </button>
                        <button type="button" title="Rate 5 stars" aria-label="Rate 5 stars">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6 dark:text-gray-400">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </button>
                    </div>
                    <span class="dark:text-gray-600">3 out of 5</span>
                </div>
                <p class="text-sm dark:text-gray-600">861 global ratings</p>
                <div class="flex flex-col mt-4">
                    <div class="rounded-lg mt-2 flex items-center space-x-1">
                        <span class="flex-shrink-0 text-2xl">5 star</span>
                        <div class="flex-1 h-10 overflow-hidden rounded-sm dark:bg-gray-300">
                            <div class="dark:bg-orange-500 h-10 w-5/6"></div>
                        </div>
                        <span class="flex-shrink-0 text-2xl text-right">83%</span>
                    </div>
                    <div class="mt-2 flex items-center space-x-1">
                        <span class="flex-shrink-0 text-2xl">5 star</span>
                        <div class="flex-1 h-10 overflow-hidden rounded-sm dark:bg-gray-300">
                            <div class="dark:bg-orange-500 h-10 w-3/6"></div>
                        </div>
                        <span class="flex-shrink-0 text-2xl text-right">50%</span>
                    </div>
                    <div class="mt-2 flex items-center space-x-1">
                        <span class="flex-shrink-0 text-2xl">5 star</span>
                        <div class="flex-1 h-10 overflow-hidden rounded-sm dark:bg-gray-300">
                            <div class="dark:bg-orange-500 h-10 w-4/6"></div>
                        </div>
                        <span class="flex-shrink-0 text-2xl text-right">66%</span>
                    </div>
                    <div class="mt-2 flex items-center space-x-1">
                        <span class="flex-shrink-0 text-2xl">5 star</span>
                        <div class="flex-1 h-10 overflow-hidden rounded-sm dark:bg-gray-300">
                            <div class="dark:bg-orange-500 h-10 w-full"></div>
                        </div>
                        <span class="flex-shrink-0 text-2xl text-right">100%</span>
                    </div>
                    <div class="mt-2 flex items-center space-x-1">
                        <span class="flex-shrink-0 text-2xl">5 star</span>
                        <div class="flex-1 h-10 overflow-hidden rounded-sm dark:bg-gray-300">
                            <div class="dark:bg-orange-500 h-10 w-1/6"></div>
                        </div>
                        <span class="flex-shrink-0 text-2xl text-right">18%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        @php
            $nums = [1,2,3,1,2,3,4,1];
        @endphp
        <ul>
            @foreach ($nums as $num)
                <li class="shadow border-2 mt-3 mb-4 px-4 py-6 rounded-lg border-gray-50">
                    <div class="inline-block w-1/3 dark:text-white dark:bg-grey-800 text-2xl">10/24/2024</div>
                    <div class="inline-block w-1/3 dark:text-white dark:bg-grey-800 text-2xl"> TIme Spent</div>
                    <a><div class="py-3 px-5 rounded-lg hover:bg-gray-700 inline-block w-3/7 dark:text-white dark:bg-grey-800">go place detail</div></a>
                </li>
            @endforeach
        </ul>
    </div>
</x-student.layout>
