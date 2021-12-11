<div class="py-4 text-gray-500 dark:text-gray-400">
    <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
        {{ Auth::user()->name }}
    </a>
    <ul class="mt-6">
        @foreach ($menus as $key => $menu)
            @if ($menu->subMenus->count())
                <li class="relative px-6 py-3"
                    x-data="{ openSubMenu: {{ strpos(Route::currentRouteName(), $menu->slug) === 0 ? 'true' : 'false' }} }">
                    <button
                        class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ strpos(Route::currentRouteName(), $menu->slug) === 0 ? 'text-orange-400' : '' }}"
                        @click="openSubMenu = ! openSubMenu" aria-haspopup="true" openSubmenu="true">
                        <span class="inline-flex items-center">
                            {!! file_get_contents(public_path('img/' . $menu->icon . '.svg')) !!}
                            <span class="ml-4">{{ $menu->name }}</span>
                        </span>
                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <template x-if="openSubMenu">
                        <ul x-transition:enter="transition-all ease-in-out duration-300"
                            x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl"
                            x-transition:leave="transition-all ease-in-out duration-300"
                            x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0"
                            class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900"
                            aria-label="submenu">
                            @foreach ($menu->subMenus as $subMenu)
                                <li
                                    class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ Route::currentRouteName() === $subMenu->slug ? 'text-orange-300' : '' }}">
                                    <a class="w-full"
                                        href="{{ route($subMenu->slug) }}">{{ $subMenu->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </template>
                </li>
            @else
                <li class="relative px-6 py-3">
                    <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 {{ Route::currentRouteName() === $menu->slug ? 'text-orange-400' : '' }}"
                        href="{{ route($menu->slug) }}">
                        {!! file_get_contents(public_path('img/' . $menu->icon . '.svg')) !!}
                        <span class="ml-4">{{ $menu->name }}</span>
                    </a>
                </li>
            @endif

        @endforeach
    </ul>
</div>
