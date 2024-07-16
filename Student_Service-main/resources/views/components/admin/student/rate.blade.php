@props(['total',"us"])

<div class="rounded-lg mt-2 flex items-center space-x-1">
    <span class="flex-shrink-0 text-2xl w-40">{{$us->place->name}}</span>
    <div class="flex-1 h-10 overflow-hidden rounded-sm dark:bg-gray-300">
        @php
            $value = ($us->count_place / $total) * 100
        @endphp
        @if($value < 5)
            <div class="dark:bg-orange-500 h-10 w-0">
        @elseif($value < 20)
            <div class="dark:bg-orange-500 h-10 w-1/6">
        @elseif($value < 40)
            <div class="dark:bg-orange-500 h-10 w-2/6">
        @elseif($value < 60)
            <div class="dark:bg-orange-500 h-10 w-3/6">
        @elseif($value < 80)
            <div class="dark:bg-orange-500 h-10 w-4/6">
        @elseif($value < 90)
            <div class="dark:bg-orange-500 h-10 w-5/6">
        @else
            <div class="dark:bg-orange-500 h-10 w-full">   
        @endif
            </div>
    </div>
    <span class="flex-shrink-0 text-2xl text-right">{{$value}}%</span>
</div>