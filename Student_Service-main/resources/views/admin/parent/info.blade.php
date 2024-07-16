<x-admin.admin_layout>
    <div>
        <div class="mb-5 flex justify-content-center flex-col w-full shadow-sm rounded-xl md:ml-30 lg:p-12 dark:bg-gray-900 dark:text-gray-50">
            <div class="flex flex-col w-full">
                <h2 class="text-7xl font-semibold text-center border-b-2">Parent Information</h2>
                <div class="flex flex-col mt-4">
                    <table>
                        <tr>
                            <td>
                                <div class="flex items-center space-x-1 m-3 overflow-hidden">
                                    <span class="flex-shrink-0 text-5xl">
                                        <img class="rounded-full w-40 h-40" src="{{ asset( 'storage/'. $parent->user->userProfile->profile) }}" alt="image description">
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
    </div>
    <div class="mb-5 flex justify-content-center flex-col w-full shadow-sm rounded-xl md:ml-30 lg:p-12 dark:bg-gray-900 dark:text-gray-50">
        <h2 class="text-4xl md:text-2 font-semibold text-center border-b-2 mb-5">Student Information</h2>
        <div class="grid md:grid-cols-4 gap-1 grid-wrap sm:grid-cols-1">
            @foreach ($students as $student)
                <x-admin.student.student :student="$student" />
            @endforeach
        </div>
    </div>
</x-admin.admin_layout>
