@props(["building"])

<div class="mx-2 pt-4 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="overflow-hidden flex flex-col items-center pb-10">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset( 'storage/'. $building->picture) }}" alt="Bonnie image"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Builing Name : {{$building->name}}</h5>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Floor Number : {{$building->floor_number}}</h5>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Place : {{$building->place->name}}</h5>
        <div class="mt-5">
            <a href="{{route("admin.building.edit",$building->id)}}"  class=" ml-2 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Update
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
</div>