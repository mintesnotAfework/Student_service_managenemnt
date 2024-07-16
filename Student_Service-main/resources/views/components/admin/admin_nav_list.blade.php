<div>
    <ul class="space-y-2 font-medium">
        <li>
            <button id="button_student_dropdown1" type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <i class="fas fa-user-graduate"></i>
                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Student</span>
                <i class="fa-solid fa-caret-down"></i>
            </button>
            <ul id="dropdown-student1" class="hidden py-2 space-y-2 ml-5">
                <li>
                    <a href='{{route("admin.student.list")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fas fa-list"></i>
                        <span class="ms-3">List</span>
                    </a>
                    
                </li>
                <li>
                    <a href='{{route("admin.student.create")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fas fa-plus"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Create</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <li>
                <button id="button_parent_dropdown1" type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <i class="fas fa-user-tie"></i>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Parent</span>
                    <i class="fa-solid fa-caret-down"></i>
                </button>
                <ul id="dropdown-parent1" class="hidden py-2 space-y-2 ml-5">
                    <li>
                        <a href='{{route("admin.parent.list")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-list"></i>
                            <span class="ms-3">List</span>
                        </a>
                        
                    </li>
                    <li>
                        <a href='{{route("admin.parent.create")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <i class="fas fa-plus"></i>
                            <span class="flex-1 ms-3 whitespace-nowrap">Create</span>
                        </a>
                    </li>
                </ul>
        </li>
        <li>
        <li>
            <button id="button_place_dropdown1" type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <i class="fas fa-location-dot"></i>
                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Place</span>
                <i class="fa-solid fa-caret-down"></i>
            </button>
            <ul id="dropdown-place1" class="hidden py-2 space-y-2 ml-5">
                <li>
                    <a href='{{route("admin.place.list")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fas fa-list"></i>
                        <span class="ms-3">List</span>
                    </a>
                    
                </li>
                <li>
                    <a href='{{route("admin.place.create")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fas fa-plus"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Create</span>
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <button id="button_building_dropdown1" type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <i class="fas fa-building"></i>
                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Building</span>
                <i class="fa-solid fa-caret-down"></i>
            </button>
            <ul id="dropdown-building1" class="hidden py-2 space-y-2 ml-5">
                <li>
                    <a href='{{route("admin.building.list")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fas fa-list"></i>
                        <span class="ms-3">List</span>
                    </a>
                    
                </li>
                <li>
                    <a href='{{route("admin.building.create")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fas fa-plus"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Create</span>
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <button id="button_class_dropdown1" type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <i class="fas fa-chalkboard-teacher"></i>
                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Class</span>
                <i class="fa-solid fa-caret-down"></i>
            </button>
            <ul id="dropdown-class1" class="hidden py-2 space-y-2 ml-5">
                <li>
                    <a href='{{route("admin.class.list")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fas fa-list"></i>
                        <span class="ms-3">List</span>
                    </a>
                    
                </li>
                <li>
                    <a href='{{route("admin.class.create")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fas fa-plus"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Create</span>
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <button id="button_cafe_dropdown1" type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <i class="fas fa-utensils"></i>
                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Cafe</span>
                <i class="fa-solid fa-caret-down"></i>
            </button>
            <ul id="dropdown-cafe1" class="hidden py-2 space-y-2 ml-5">
                <li>
                    <a href='{{route("admin.cafe.list")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fas fa-list"></i>
                        <span class="ms-3">List</span>
                    </a>
                    
                </li>
                <li>
                    <a href='{{route("admin.cafe.create")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fas fa-plus"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Create</span>
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <button id="button_dorm_dropdown1" type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <i class="fas fa-star"></i>
                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Dorm</span>
                <i class="fa-solid fa-caret-down"></i>
            </button>
            <ul id="dropdown-dorm1" class="hidden py-2 space-y-2 ml-5">
                <li>
                    <a href='{{route("admin.dorm.list")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fas fa-list"></i>
                        <span class="ms-3">List</span>
                    </a>
                    
                </li>
                <li>
                    <a href='{{route("admin.dorm.create")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fas fa-plus"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Create</span>
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <button id="button_campus_dropdown1" type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <i class="fas fa-university"></i>
                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Campus</span>
                <i class="fa-solid fa-caret-down"></i>
            </button>
            <ul id="dropdown-campus1" class="hidden py-2 space-y-2 ml-5">
                <li>
                    <a href='{{route("admin.campus.list")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fas fa-list"></i>
                        <span class="ms-3">List</span>
                    </a>
                    
                </li>
                <li>
                    <a href='{{route("admin.campus.create")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fas fa-plus"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Create</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <button id="button_dept_dropdown1" type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <i class="fas fa-folder"></i>
                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Departement</span>
                <i class="fa-solid fa-caret-down"></i>
            </button>
            <ul id="dropdown-dept1" class="hidden py-2 space-y-2 ml-5">
                <li>
                    <a href='{{route("admin.departement.list")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fas fa-list"></i>
                        <span class="ms-3">List</span>
                    </a>
                    
                </li>
                <li>
                    <a href='{{route("admin.departement.create")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fas fa-plus"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Create</span>
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <button id="button_field_dropdown1" type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <i class="fa-solid fa-database"></i>
                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Field</span>
                <i class="fa-solid fa-caret-down"></i>
            </button>
            <ul id="dropdown-field1" class="hidden py-2 space-y-2 ml-5">
                <li>
                    <a href='{{route("admin.field.list")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fas fa-list"></i>
                        <span class="ms-3">List</span>
                    </a>
                    
                </li>
                <li>
                    <a href='{{route("admin.field.create")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <i class="fas fa-plus"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Create</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href='{{route("authentication.logout")}}' class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <i class="fas fa-sign-out "></i>
                <span class="ms-3">Logout</span>
            </a>
        </li>
    </ul>
</div>
<script type="text/javascript">
    document.querySelector("#button_student_dropdown1").addEventListener('click',function(){
        if(document.querySelector("#dropdown-student1").classList.contains("hidden")){
            document.querySelector("#dropdown-student1").classList.remove("hidden")
        }
        else{
            document.querySelector("#dropdown-student1").classList.add("hidden")
        }
    });
    document.querySelector("#button_parent_dropdown1").addEventListener('click',function(){
        if(document.querySelector("#dropdown-parent1").classList.contains("hidden")){
            document.querySelector("#dropdown-parent1").classList.remove("hidden")
        }
        else{
            document.querySelector("#dropdown-parent1").classList.add("hidden")
        }
    });
    document.querySelector("#button_place_dropdown1").addEventListener('click',function(){
        if(document.querySelector("#dropdown-place1").classList.contains("hidden")){
            document.querySelector("#dropdown-place1").classList.remove("hidden")
        }
        else{
            document.querySelector("#dropdown-place1").classList.add("hidden")
        }
    });
    document.querySelector("#button_building_dropdown1").addEventListener('click',function(){
        if(document.querySelector("#dropdown-building1").classList.contains("hidden")){
            document.querySelector("#dropdown-building1").classList.remove("hidden")
        }
        else{
            document.querySelector("#dropdown-building1").classList.add("hidden")
        }
    });
    document.querySelector("#button_class_dropdown1").addEventListener('click',function(){
        if(document.querySelector("#dropdown-class1").classList.contains("hidden")){
            document.querySelector("#dropdown-class1").classList.remove("hidden")
        }
        else{
            document.querySelector("#dropdown-class1").classList.add("hidden")
        }
    });
    document.querySelector("#button_cafe_dropdown1").addEventListener('click',function(){
        if(document.querySelector("#dropdown-cafe1").classList.contains("hidden")){
            document.querySelector("#dropdown-cafe1").classList.remove("hidden")
        }
        else{
            document.querySelector("#dropdown-cafe1").classList.add("hidden")
        }
    });
    document.querySelector("#button_dorm_dropdown1").addEventListener('click',function(){
        if(document.querySelector("#dropdown-dorm1").classList.contains("hidden")){
            document.querySelector("#dropdown-dorm1").classList.remove("hidden")
        }
        else{
            document.querySelector("#dropdown-dorm1").classList.add("hidden")
        }
    });
    document.querySelector("#button_dept_dropdown1").addEventListener('click',function(){
        if(document.querySelector("#dropdown-dept1").classList.contains("hidden")){
            document.querySelector("#dropdown-dept1").classList.remove("hidden")
        }
        else{
            document.querySelector("#dropdown-dept1").classList.add("hidden")
        }
    });
    document.querySelector("#button_campus_dropdown1").addEventListener('click',function(){
        if(document.querySelector("#dropdown-campus1").classList.contains("hidden")){
            document.querySelector("#dropdown-campus1").classList.remove("hidden")
        }
        else{
            document.querySelector("#dropdown-campus1").classList.add("hidden")
        }
    });
    document.querySelector("#button_field_dropdown1").addEventListener('click',function(){
        if(document.querySelector("#dropdown-field1").classList.contains("hidden")){
            document.querySelector("#dropdown-field1").classList.remove("hidden")
        }
        else{
            document.querySelector("#dropdown-field1").classList.add("hidden")
        }
    });
</script>