<aside class="bg-gray-800 min-h-screen">
    <div class="flex flex-col justify-between h-full mx-6">
        <!-- Logo or Site Title -->
        <div class="flex flex-col mt-5">
            <!-- Your logo or site title goes here -->
            <h1 class="text-white font-semibold leading-loose text-2xl pl-3">Scriptu</h1>
        </div>

        <nav class="mt-2 flex-grow">
            @foreach($topics as $topic)
                <div class="flex flex-col">
                    <a href="{{ route('topics.show', $topic->id) }}" class="flex items-center text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-4 rounded-md text-sm font-medium">
                        <!-- Add icon here -->
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="100" viewBox="0,0,256,256" class="w-[10%] h-[10%] mr-2"
                             style="fill:#FFFFFF;">
                            <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M12,2c-5.514,0 -10,4.486 -10,10c0,5.514 4.486,10 10,10c5.514,0 10,-4.486 10,-10c0,-1.126 -0.19602,-2.2058 -0.54102,-3.2168l-1.61914,1.61914c0.105,0.516 0.16016,1.05066 0.16016,1.59766c0,4.411 -3.589,8 -8,8c-4.411,0 -8,-3.589 -8,-8c0,-4.411 3.589,-8 8,-8c1.633,0 3.15192,0.49389 4.41992,1.33789l1.43164,-1.43164c-1.648,-1.194 -3.66656,-1.90625 -5.85156,-1.90625zM21.29297,3.29297l-10.29297,10.29297l-3.29297,-3.29297l-1.41406,1.41406l4.70703,4.70703l11.70703,-11.70703z"></path></g></g>
                        </svg>
                        <!-- Topic title with styling -->
                        <span style="color: #FFFFFF; font-size: 0.9rem;">{{ $topic->title }}</span>
                    </a>
                </div>
            @endforeach
        </nav>

        <!-- Sidebar Footer (Optional) -->
        <div class="flex items-center justify-center py-5">
            <!-- Footer content goes here -->
            <h1 class="text-white">Copyright &copy; 2024 Scriptu</h1>
        </div>
    </div>
</aside>
