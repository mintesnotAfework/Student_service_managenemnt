<x-general.layout>
    <div>
        <section class="bg-gray-50 dark:bg-gray-900 min-h-screen">
            <div id="main_site_regiestration" class="background-container opacity-45 blur-md">
                <a class="transition duration-3000 ease-out" href="#site_registeration" onclick="hide()">
                    <img src="{{ asset('login_background.jpg') }}" style="width:100%" alt="The backgroud image"/>
                </a>
            </div>
            <div id="site_registeration" class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <a onclick=" hide()" href="#main_site_regiestration" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                    Site Registeration    
                </a>
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Enter Your Credentials
                        </h1>
                        <form id="form_site_reg" onsubmit="return(validateSiteRegForm())" class="space-y-4 md:space-y-6" method="POST" action="{{route("site_register.register_site")}}">
                            @csrf
                            <input type="hidden" name="place" value="{{$place_id}}"/>
                            <div>
                                <label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your ID</label>
                                <input type="text" name="id" id="id"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1405579" required >
                                @error("id")
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                @error("password")
                                    <p class="text-red-500">{{$message}}</p>
                                @enderror
                            </div>
                            <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-primary-800">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div id="message" class="hidden transition ease-out duration-500 fixed top-10 right-0 px-6 py-8 px-20 md:h-screen lg:py-0">
                <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                    <h1 class="text-center m-2 px-20 text-3xl font-bold leading-tight tracking-tight text-gray-900 md:text-4xl dark:text-white">
                        Thank you 
                    </h1>
                    <h2 class="text-center m-2 p-2 align-center text-3xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Have a Nice Time
                    </h2>
                </div>
            </div>
        </section>
    </div>
    <script type="text/javascript">
        setInterval(() => {
            var value = document.getElementById("id").value;
            if (value == ""){
                if(document.getElementById("main_site_regiestration").classList.contains("hidden")){
                    document.getElementById("main_site_regiestration").classList.remove("hidden");   
                }
                window.location.replace("#main_site_regiestration");
            }
        }, 30000);
        setTimeout(() => {
            if(!document.getElementById("message").classList.contains("hidden")){
                document.getElementById("message").classList.add("hidden");
            }
        }, 10000);
        function hide(){
            if(!document.getElementById("main_site_regiestration").classList.contains("hidden")){
                document.getElementById("main_site_regiestration").classList.add("hidden");
            }  
            else {
                document.getElementById("main_site_regiestration").classList.remove("hidden");   
            } 
        }
    </script>
</x-general.layout>