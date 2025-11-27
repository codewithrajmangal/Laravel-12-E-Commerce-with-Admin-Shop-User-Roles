<nav class="container flex justify-between items-center">
    <div>
        <a href="{{ route('home') }}">
            <img src="{{ asset(Storage::url($company->logo)) }}" class="h-[70px]" alt="{{ $company->name }}">
        </a>
    </div>
    <div>
        <form action="{{ route('search') }}" method="GET"
            style="display: flex; align-items: center; border: 1px solid #000000; border-radius: 25px; padding: 5px 10px; width: 450px; background: rgb(255, 255, 255);">

            <input class=" text-[black]" type="text" name="q" placeholder="Search here"
                style="border: none; outline: none; flex: 1; font-size: 16px; padding: 8px; border-radius: 25px;">

            <button type="submit"
                style="border: none; background: #000; color: #fff; border-radius: 50%; width: 35px; height: 35px; display: flex; justify-content: center; align-items: center; cursor: pointer;">
                <i class="fa-solid fa-magnifying-glass" style="font-size: 16px;"></i>
            </button>
        </form>
    </div>
        @if (!Auth::user())
            <button id="loginDropdown" data-dropdown-toggle="dropdown"
                class="border   text-[black] px-4 py-1 flex items-center rounded-2xl
                "
                type="button">Login <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>
        @else
            <div class="flex gap-4 items-center text-lg ">
                <a href="/cart" class="relative">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <small
                        class="absolute -top-1 -right-1 border text-black w-4 h-4 flex items-center text-xs justify-center rounded-full">{{ Auth::user()->carts()->count() }}</small>
                </a>

                <a href="{{ route('profile.edit') }}">
                    <i class="fa-solid fa-circle-user"></i>
                </a>

                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit"><i class="fa-solid fa-arrow-right-from-bracket"></i></button>
                </form>
            </div>
        @endif

        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
            <ul class="py-2 text-sm text-gray-700" aria-labelledby="loginDropdown">
                <li>
                    <a href="/admin" class="  block px-4 py-2 hover:bg-gray-100">Admin</a>
                </li>
                <li>
                    <a href="/shop" class="   block px-4 py-2 hover:bg-gray-100">Shop</a>
                </li>
                <li>
                    <a href="/login" class="block px-4 py-2 hover:bg-gray-100">User</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
