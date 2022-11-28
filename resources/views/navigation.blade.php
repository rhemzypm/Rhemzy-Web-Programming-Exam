<nav class="flex flex-row justify-center items-center py-4 mx-auto">
    <ul class="flex flex-row space-x-4">
        
        <li>
            <a href="/"
                class="font-semibold text-blue-900 transition-all duration-300 ease-in-out md:hover:text-blue-700">
                Home
            </a>
        </li>   
        <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-semibold text-blue-900    00 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 transition-all duration-300 ease-in-out md:hover:text-blue-700 md:p-0 md:w-auto">
                Category
                <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar"
                class="z-10 hidden font-normal bg-white divide-y divide-gray-400 rounded shadow w-44">
                <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="{{ route('book-category', 6) }}"
                            class="block px-4 py-2 text-base font-normal hover:bg-blue-900 hover:text-white transition-all duration-300 ease-in-out">Horror</a>
                    </li>
                    <li>
                        <a href="{{ route('book-category', 2) }}"
                            class="block px-4 py-2 text-base font-normal hover:bg-blue-900 hover:text-white transition-all duration-300 ease-in-out">Fiction</a>
                    </li>
                    <li>
                        <a href="{{ route('book-category', 1) }}"
                            class="block px-4 py-2 text-base font-normal hover:bg-blue-900 hover:text-white transition-all duration-300 ease-in-out">Fantasy</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a href="{{ route('publisher') }}"
                class="font-semibold text-blue-900 transition-all duration-300 ease-in-out md:hover:text-blue-700">
                Publisher
            </a>
        </li>
        <li>
            <a href="{{ route('contact') }}"
                class="font-semibold text-blue-900 transition-all duration-300 ease-in-out md:hover:text-blue-700">
                Contact
            </a>
        </li>
    </ul>
</nav>
