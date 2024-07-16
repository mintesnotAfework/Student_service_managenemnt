<div class="flex flex-col justify-center max-w-xs p-6 shadow-md rounded-xl sm:px-12 dark:bg-gray-800 dark:text-white">
    <img src="{{ asset( 'storage/'. auth()->user()->userProfile->profile) }}" alt="" class="w-32 h-32 mx-auto rounded-full dark:bg-gray-500 aspect-square">
    <div class="space-y-4 text-center divide-y dark:divide-gray-300">
        <div class="my-2 space-y-1">
            <h2 class="text-xl font-semibold sm:text-2xl">{{auth()->user()->name}}</h2>
        </div>
    </div>
</div>