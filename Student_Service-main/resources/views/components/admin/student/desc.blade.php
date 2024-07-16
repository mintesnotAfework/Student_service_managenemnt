@props(['us',"tempo"])

<li class="shadow border-2 mt-3 mb-4 px-4 py-6 rounded-lg border-gray-50">
    <div class="block mb-2 dark:text-white dark:bg-grey-800 text-2xl">Entered Time : 
        <span class="dark:text-orange-500">
            <b> {{$us->created_at->day}}-{{$us->created_at->month}}-{{$us->created_at->year}}  {{$us->created_at->hour}}:{{$us->created_at->minute}}:{{$us->created_at->second}}</b>
        </span>
    </div>
    <div class="block dark:text-white dark:bg-grey-800 text-2xl">Spent Time : 
        <span class="dark:text-orange-500">
            @php
                $time = (int) ($tempo - strtotime($us->created_at));
                $minute = (int) ($time / 60);
                $second = $time % 60;
                $hour = (int) ($minute / 60);
                $minute = $minute % 60;
            @endphp
            <b>{{ $hour }} Hour {{$minute}} Minute {{ $second }} Second</b>
        </span>    
    </div>
    @if(isset(auth()->user()->admin->id))
        <a href="{{route("admin.place.edit",$us->place->id)}}">
    @endif
        <div class="text-2xl block mt-1 py-1 rounded-lg hover:bg-gray-700 inline-block w-3/7 dark:text-white dark:bg-grey-800">
            Place Information : <img class="inline rounded-full w-10 h-10" src="{{ asset( 'storage/'. $us->place->picture) }}" alt="image description">
            <span class="ml-1 text-xl dark:text-orange-500"><b>{{$us->place->name}}</b></span>
        </div>
        @if(isset(auth()->user()->admin->id))
            </a>
        @endif
</li>