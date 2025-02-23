@props(['url'])

@php
    $catagorys = ["student",'parent'];
@endphp
<div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
    <form method="post" action={{$url}}>
        @csrf
        <input type="hidden" name="search-all" value="all">
        <button type="submit" class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">All categories</button>
    </form>
    @foreach($catagorys as $catagory)
        <x-catagory message={{$catagory}} url={{$url}}/>
    @endforeach
</div>