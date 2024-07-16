<x-parent.layout>
    <div>
        <div class="mb-5 flex justify-content-center flex-col w-full shadow-sm rounded-xl md:ml-30 lg:p-12 dark:bg-gray-900 dark:text-gray-50">
            <div class="overflow-x-scroll flex flex-col w-full">
                <h2 class="text-4xl md:text-2 font-semibold text-center border-b-2">Student Information</h2>
                <div class="flex flex-col mt-4">
                    <table>
                        <tr>
                            <td>
                                <div class="flex items-center space-x-1 m-3">
                                    <span class="text-3xl">
                                        <img class="rounded-full w-40 h-40" src="{{ asset( 'storage/'. $student->user->userProfile->profile) }}" alt="image description">
                                    </span>
                                </div>
                            </td>
                            <td>
                                <div class="flex items-center text-3xl space-x-1 m-1">
                                    <span class="flex-shrink-0 ">
                                        Name :
                                    </span> 
                                    <span class="dark:text-orange-500">
                                        <b>{{$student->user->userProfile->full_name}}</b>
                                    </span>
                                </div>
                                <div class="flex items-center space-x-1 m-1">
                                    <span class="flex-shrink-0 text-3xl">Username : 
                                        <span class="dark:text-orange-500 ">
                                            <b>{{$student->user->name}}</b>
                                        </span>
                                    </span>
                                </div>
                                <div class="flex items-center space-x-1 m-1">
                                    <span class="flex-shrink-0 text-3xl">Email : 
                                        <span class="dark:text-orange-500 ">
                                            <b>{{$student->user->email}}</b>
                                        </span>
                                    </span>
                                </div>
                                <div class="flex items-center space-x-1 m-1">
                                    <span class="flex-shrink-0 text-3xl">Id : 
                                        <span class="dark:text-orange-500 ">
                                            <b>{{$student->user->userProfile->special_id}}</b>
                                        </span>
                                    </span>
                                </div>
                                <div class="flex items-center space-x-1 m-1">
                                    <span class="flex-shrink-0 text-3xl">Birthday : 
                                        <span class="dark:text-orange-500 ">
                                            <b>{{$student->user->userProfile->birthday}}</b>
                                        </span>
                                    </span>
                                </div>
                                <div class="flex items-center space-x-1 m-1">
                                    <span class="flex-shrink-0 text-3xl">Total Record : 
                                        <span class="dark:text-orange-500 ">
                                            <b>{{$total}}</b>
                                        </span>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="md:mx-20 mt-10 flex justify-content-center flex-col md:w-5/6 sm:w-full p-8 shadow-sm rounded-xl md:ml-30 lg:p-12 dark:bg-gray-900 dark:text-gray-50">
            <div class="flex flex-col w-full">
                <h2 class="text-3xl font-semibold text-center">Place Student Relation</h2>
                <div class="flex flex-col mt-4">
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($usp as $us)
                        @if($i < 3)
                            <x-admin.student.rate total={{$total}} :us="$us"/>
                            @php
                                $i = $i + 1;
                            @endphp
                        @else
                            @break
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div>
        <ul>
            @foreach ($user_places as $us)
                @if(isset($tempo))
                    <x-admin.student.desc :us="$us" :tempo="$tempo" />
                @else
                    <x-admin.student.desc :us="$us" tempo={{strtotime(now())}}/>
                @endif
                @php
                strtotime(now());
                    $tempo = strtotime($us->created_at);
                @endphp
            @endforeach
        </ul>
    </div>
</x-parent.layout>
