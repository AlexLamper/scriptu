<nav class="bg-white border border-b border-gray-100" style="height: 100%; border-bottom: 1px solid #d6d6d6">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <x-application-logo class="block h-9 w-auto fill-current" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" style="font-weight: 600; color: #18181b !important; letter-spacing: 0.03rem; font-size: 1rem">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('topics.index')" :active="request()->routeIs('topics.index')" style="color: #18181b !important; font-weight: 600; letter-spacing: 0.03rem; font-size: 1rem">
                        {{ __('Courses') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about')" :active="request()->routeIs('about')" style="font-weight: 600; color: #18181b !important; letter-spacing: 0.03rem; font-size: 1rem">
                        {{ __('About') }}
                    </x-nav-link>
                </div>

            </div>

            <!-- Notification Bell Icon -->
{{--            <div class="hidden sm:flex sm:items-center sm:ms-6">--}}
{{--                <button id="notificationButton" class="relative">--}}
{{--                    <svg fill="#000000" height="25px" width="25px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 611.999 611.999" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M570.107,500.254c-65.037-29.371-67.511-155.441-67.559-158.622v-84.578c0-81.402-49.742-151.399-120.427-181.203 C381.969,34,347.883,0,306.001,0c-41.883,0-75.968,34.002-76.121,75.849c-70.682,29.804-120.425,99.801-120.425,181.203v84.578 c-0.046,3.181-2.522,129.251-67.561,158.622c-7.409,3.347-11.481,11.412-9.768,19.36c1.711,7.949,8.74,13.626,16.871,13.626 h164.88c3.38,18.594,12.172,35.892,25.619,49.903c17.86,18.608,41.479,28.856,66.502,28.856 c25.025,0,48.644-10.248,66.502-28.856c13.449-14.012,22.241-31.311,25.619-49.903h164.88c8.131,0,15.159-5.676,16.872-13.626 C581.586,511.664,577.516,503.6,570.107,500.254z M484.434,439.859c6.837,20.728,16.518,41.544,30.246,58.866H97.32 c13.726-17.32,23.407-38.135,30.244-58.866H484.434z M306.001,34.515c18.945,0,34.963,12.73,39.975,30.082 c-12.912-2.678-26.282-4.09-39.975-4.09s-27.063,1.411-39.975,4.09C271.039,47.246,287.057,34.515,306.001,34.515z M143.97,341.736v-84.685c0-89.343,72.686-162.029,162.031-162.029s162.031,72.686,162.031,162.029v84.826 c0.023,2.596,0.427,29.879,7.303,63.465H136.663C143.543,371.724,143.949,344.393,143.97,341.736z M306.001,577.485 c-26.341,0-49.33-18.992-56.709-44.246h113.416C355.329,558.493,332.344,577.485,306.001,577.485z"></path> <path d="M306.001,119.235c-74.25,0-134.657,60.405-134.657,134.654c0,9.531,7.727,17.258,17.258,17.258 c9.531,0,17.258-7.727,17.258-17.258c0-55.217,44.923-100.139,100.142-100.139c9.531,0,17.258-7.727,17.258-17.258 C323.259,126.96,315.532,119.235,306.001,119.235z"></path> </g> </g> </g> </g></svg>--}}
{{--                    <!-- Notification Dot -->--}}
{{--                    <div class="w-2 h-2 bg-red-500 rounded-full absolute top-0 right-0 hidden"></div>--}}
{{--                </button>--}}
{{--                <!-- Notification Dropdown -->--}}
{{--                <div id="notificationDropdown" class="absolute top-6 left-0 mt-8 w-48 bg-white border border-gray-200 rounded-md shadow-lg origin-top-left divide-y divide-gray-100 ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="notifications-menu">--}}
{{--                    <!-- Notification Items -->--}}
{{--                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Notification 1</a>--}}
{{--                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Notification 2</a>--}}
{{--                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Notification 3</a>--}}
{{--                </div>--}}
{{--            </div>--}}

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <div class="mr-4 mt-2">
                    <button id="notificationButton" class="relative">
                        <svg fill="#000000" height="22px" width="22px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 611.999 611.999" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M570.107,500.254c-65.037-29.371-67.511-155.441-67.559-158.622v-84.578c0-81.402-49.742-151.399-120.427-181.203 C381.969,34,347.883,0,306.001,0c-41.883,0-75.968,34.002-76.121,75.849c-70.682,29.804-120.425,99.801-120.425,181.203v84.578 c-0.046,3.181-2.522,129.251-67.561,158.622c-7.409,3.347-11.481,11.412-9.768,19.36c1.711,7.949,8.74,13.626,16.871,13.626 h164.88c3.38,18.594,12.172,35.892,25.619,49.903c17.86,18.608,41.479,28.856,66.502,28.856 c25.025,0,48.644-10.248,66.502-28.856c13.449-14.012,22.241-31.311,25.619-49.903h164.88c8.131,0,15.159-5.676,16.872-13.626 C581.586,511.664,577.516,503.6,570.107,500.254z M484.434,439.859c6.837,20.728,16.518,41.544,30.246,58.866H97.32 c13.726-17.32,23.407-38.135,30.244-58.866H484.434z M306.001,34.515c18.945,0,34.963,12.73,39.975,30.082 c-12.912-2.678-26.282-4.09-39.975-4.09s-27.063,1.411-39.975,4.09C271.039,47.246,287.057,34.515,306.001,34.515z M143.97,341.736v-84.685c0-89.343,72.686-162.029,162.031-162.029s162.031,72.686,162.031,162.029v84.826 c0.023,2.596,0.427,29.879,7.303,63.465H136.663C143.543,371.724,143.949,344.393,143.97,341.736z M306.001,577.485 c-26.341,0-49.33-18.992-56.709-44.246h113.416C355.329,558.493,332.344,577.485,306.001,577.485z"></path> <path d="M306.001,119.235c-74.25,0-134.657,60.405-134.657,134.654c0,9.531,7.727,17.258,17.258,17.258 c9.531,0,17.258-7.727,17.258-17.258c0-55.217,44.923-100.139,100.142-100.139c9.531,0,17.258-7.727,17.258-17.258 C323.259,126.96,315.532,119.235,306.001,119.235z"></path> </g> </g> </g> </g></svg>
                        <!-- Notification Dot -->
                        <div class="w-2 h-2 bg-red-500 rounded-full absolute top-0 right-0 hidden"></div>
                    </button>
                    <!-- Notification Dropdown -->
                    <div id="notificationDropdown" class="absolute top-6 mt-8 w-48 bg-white border border-gray-200 rounded-md shadow-lg origin-top-left divide-y divide-gray-100 ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="notifications-menu">
                        <!-- Notification Items -->
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Test Notification 1</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Test Notification 2</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Test Notification 3</a>
                    </div>
                </div>
                @auth
                    <x-dropdown align="right" width="48">
                        <!-- Dropdown Trigger -->
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-900 bg-white hover:text-gray-800 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <!-- Dropdown Content -->
                        <x-slot name="content">
                            <!-- Profile Link -->
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Logout Form -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <!-- Authentication Links -->
                    <div class="space-x-4">
                        <x-nav-link :href="route('login')" class="px-3 py-2" style="color: #18181b !important; font-weight: 600; letter-spacing: 0.03rem; font-size: 1rem">
                            {{ __('Log in') }}
                        </x-nav-link>
                        <x-nav-link :href="route('register')" class="px-3 py-2" style="color: #18181b !important; font-weight: 600; letter-spacing: 0.03rem; font-size: 1rem">
                            {{ __('Register') }}
                        </x-nav-link>
                    </div>
                @endauth
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const notificationButton = document.getElementById('notificationButton');
        const notificationDropdown = document.getElementById('notificationDropdown');

        notificationButton.addEventListener('click', function () {
            notificationDropdown.classList.toggle('hidden');
        });
    });
</script>
