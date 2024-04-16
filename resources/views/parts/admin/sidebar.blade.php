<div>
    <!-- Sidebar backdrop (mobile only) -->
    <div class="fixed inset-0 z-40 transition-opacity duration-200 bg-slate-900 bg-opacity-30 lg:hidden lg:z-auto"
        :class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak></div>

    <!-- Sidebar -->
    <div id="sidebar"
        class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-slate-800 p-4 transition-all duration-200 ease-in-out"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false"
        @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

        <!-- Sidebar header -->
        <div class="flex justify-between pr-3 mb-10 sm:px-2">
            <!-- Close button -->
            <button class="lg:hidden text-slate-500 hover:text-slate-400" @click.stop="sidebarOpen = !sidebarOpen"
                aria-controls="sidebar" :aria-expanded="sidebarOpen">
                <span class="sr-only">Close sidebar</span>
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z" />
                </svg>
            </button>
            <!-- Logo -->
            <a class="block" href="{{ route('home') }}">
                <img src="{{asset('images/logo-white.svg')}}" class="w-16" />
            </a>
        </div>

        <!-- Links -->
        <div class="space-y-8">
            <!-- Pages group -->
            <div>
                <ul class="mt-3">
                    <!-- Dashboard -->
                    <x-admin.menu-item :route="'admin.dashboard'" :title="__('admin.home')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 shrink-0" viewBox="0 0 24 24"
                             id="dashboard">
                            <path fill="#94A3B8"
                                  d="M19.088,4.95453c-.00732-.00781-.00952-.01819-.01715-.02582s-.01819-.00995-.02606-.01733a9.97886,9.97886,0,0,0-14.08948,0c-.00787.00738-.01837.00964-.02606.01733s-.00983.018-.01715.02582a10,10,0,1,0,14.1759,0ZM12,20a7.9847,7.9847,0,0,1-6.235-3H9.78027a2.9636,2.9636,0,0,0,4.43946,0h4.01532A7.9847,7.9847,0,0,1,12,20Zm-1-5a1,1,0,1,1,1,1A1.001,1.001,0,0,1,11,15Zm8.41022.00208L19.3999,15H15a2.99507,2.99507,0,0,0-2-2.81573V9a1,1,0,0,0-2,0v3.18427A2.99507,2.99507,0,0,0,9,15H4.6001l-.01032.00208A7.93083,7.93083,0,0,1,4.06946,13H5a1,1,0,0,0,0-2H4.06946A7.95128,7.95128,0,0,1,5.68854,7.10211l.65472.65473A.99989.99989,0,1,0,7.75732,6.34277l-.65466-.65466A7.95231,7.95231,0,0,1,11,4.06946V5a1,1,0,0,0,2,0V4.06946a7.95231,7.95231,0,0,1,3.89734,1.61865l-.65466.65466a.99989.99989,0,1,0,1.41406,1.41407l.65472-.65473A7.95128,7.95128,0,0,1,19.93054,11H19a1,1,0,0,0,0,2h.93054A7.93083,7.93083,0,0,1,19.41022,15.00208Z">
                            </path>
                        </svg>
                    </x-admin.menu-item>

                    <!-- Tasks -->
                    <x-admin.menu-item :route="'admin.tasks.index'" :title="__('admin.tasks')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 shrink-0" viewBox="0 0 24 24"
                             id="clipboard-notes">
                            <path fill="#94A3B8"
                                  d="M13,14H9a1,1,0,0,0,0,2h4a1,1,0,0,0,0-2ZM17,4H15.82A3,3,0,0,0,13,2H11A3,3,0,0,0,8.18,4H7A3,3,0,0,0,4,7V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V7A3,3,0,0,0,17,4ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm8,14a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V7A1,1,0,0,1,7,6H8V7A1,1,0,0,0,9,8h6a1,1,0,0,0,1-1V6h1a1,1,0,0,1,1,1Zm-3-9H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z">
                            </path>
                        </svg>
                    </x-admin.menu-item>

                    <!-- Polls -->
                    <x-admin.menu-item :route="'admin.polls.index'" :title="__('admin.polls')">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                             class="w-6 h-6 shrink-0" viewBox="0 0 24 24">
                            <path fill="#94A3B8"
                                  d="M19,12h-7V5c0-0.6-0.4-1-1-1c-5,0-9,4-9,9s4,9,9,9s9-4,9-9C20,12.4,19.6,12,19,12z M12,19.9c-3.8,0.6-7.4-2.1-7.9-5.9C3.5,10.2,6.2,6.6,10,6.1V13c0,0.6,0.4,1,1,1h6.9C17.5,17.1,15.1,19.5,12,19.9z M15,2c-0.6,0-1,0.4-1,1v6c0,0.6,0.4,1,1,1h6c0.6,0,1-0.4,1-1C22,5.1,18.9,2,15,2z M16,8V4.1C18,4.5,19.5,6,19.9,8H16z">
                            </path>
                        </svg>
                    </x-admin.menu-item>

                    <!-- Professions -->
                    <x-admin.menu-item :route="'admin.professions.index'" :title="__('admin.professions')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 shrink-0" viewBox="0 0 24 24" id="user-md">
                            <path fill="#94A3B8" d="m15.899 13.229-.005-.002c-.063-.027-.124-.058-.188-.083A5.988 5.988 0 0 0 18 8.434a5.29 5.29 0 0 0-.045-.63.946.946 0 0 0 .038-.122l.281-2.397a3.006 3.006 0 0 0-2.442-3.302l-.79-.143a16.931 16.931 0 0 0-6.083 0l-.791.143a3.006 3.006 0 0 0-2.442 3.302l.28 2.397a.946.946 0 0 0 .039.122 5.29 5.29 0 0 0-.045.63 5.988 5.988 0 0 0 2.294 4.71c-.064.025-.125.056-.188.083l-.005.002a9.948 9.948 0 0 0-6.035 8.097 1 1 0 0 0 1.988.217 7.948 7.948 0 0 1 4.216-6.185l3.023 3.023a1 1 0 0 0 1.414 0l3.023-3.023a7.948 7.948 0 0 1 4.216 6.185 1 1 0 0 0 .992.892 1.048 1.048 0 0 0 .11-.006 1 1 0 0 0 .886-1.103 9.948 9.948 0 0 0-6.036-8.097ZM7.712 5.051a1.002 1.002 0 0 1 .814-1.1l.79-.143a14.93 14.93 0 0 1 5.368 0l.79.143a1.002 1.002 0 0 1 .814 1.1l-.178 1.514H7.89ZM12 16.261l-1.65-1.651a7.85 7.85 0 0 1 3.3 0Zm0-3.826a4.005 4.005 0 0 1-3.998-3.87h7.996A4.005 4.005 0 0 1 12 12.435Z"></path>
                        </svg>
                    </x-admin.menu-item>

                    <!-- Qualifications -->
                    <x-admin.menu-item :route="'admin.qualifications.index'" :title="__('admin.responsibilities')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 shrink-0" viewBox="0 0 24 24" >
                            <path fill="#94A3B8" d="M13.2 15.0004C13 15.1004 12.8 15.1004 12.6 15.2004C12.5 15.0004 12.4 14.8004 12.3 14.7004C11.5 14.0004 10.3 13.9004 9.3 14.5004C8.5 15.0004 8 16.0004 8 17.0004C8 17.5004 8.5 18.0004 9 17.9004C9.5 17.9004 10 17.4004 10 16.9004C10 16.6004 10.1 16.4004 10.3 16.2004C10.4 16.2004 10.5 16.1004 10.6 16.1004C10.3 16.7004 10.5 17.4004 11.1 17.8004C11.3 17.9004 11.4 17.9004 11.6 17.9004C12 17.9004 12.4 17.7004 12.7 17.4004C12.8 17.3004 13 17.2004 13.2 17.1004C13.3 17.5004 13.7 17.9004 14.2 17.9004H15C15.6 17.9004 16 17.5004 16 16.9004C16 16.4004 15.6 16.0004 15.1 15.9004C15 15.7004 15 15.6004 14.8 15.4004C14.5 15.1004 13.8 14.9004 13.2 15.0004ZM20 8.90039C20 8.80039 20 8.70039 19.9 8.60039V8.50039C19.9 8.40039 19.8 8.30039 19.7 8.20039L13.7 2.20039C13.6 2.10039 13.5 2.10039 13.4 2.00039H13.3C13.2 2.00039 13.1 2.00039 13 1.90039H7C5.3 2.00039 4 3.30039 4 5.00039V19.0004C4 20.7004 5.3 22.0004 7 22.0004H17C18.7 22.0004 20 20.7004 20 19.0004V8.90039C20 9.00039 20 9.00039 20 8.90039ZM14 5.40039L16.6 8.00039H15C14.4 8.00039 14 7.60039 14 7.00039V5.40039ZM18 19.0004C18 19.6004 17.6 20.0004 17 20.0004H7C6.4 20.0004 6 19.6004 6 19.0004V5.00039C6 4.40039 6.4 4.00039 7 4.00039H12V7.00039C12 8.70039 13.3 10.0004 15 10.0004H18V19.0004ZM9 10.0004H10C10.6 10.0004 11 9.60039 11 9.00039C11 8.40039 10.6 8.00039 10 8.00039H9C8.4 8.00039 8 8.40039 8 9.00039C8 9.60039 8.4 10.0004 9 10.0004Z" />
                        </svg>
                    </x-admin.menu-item>

                    <!-- Categories of Qualifications -->
                    <x-admin.menu-item :route="'admin.category_qualifications.index'" :title="__('admin.categories_responsibilities')">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 shrink-0">
                            <path fill="#94A3B8" d="M3.5 6C3.30222 6 3.10888 6.05865 2.94443 6.16853C2.77998 6.27841 2.65181 6.43459 2.57612 6.61732C2.50043 6.80004 2.48063 7.00111 2.51922 7.19509C2.5578 7.38907 2.65304 7.56725 2.79289 7.70711C2.93275 7.84696 3.11093 7.9422 3.30491 7.98079C3.49889 8.01937 3.69996 7.99957 3.88268 7.92388C4.06541 7.84819 4.22159 7.72002 4.33147 7.55557C4.44135 7.39112 4.5 7.19778 4.5 7C4.5 6.73478 4.39464 6.48043 4.20711 6.29289C4.01957 6.10536 3.76522 6 3.5 6ZM7.5 8H21.5C21.7652 8 22.0196 7.89464 22.2071 7.70711C22.3946 7.51957 22.5 7.26522 22.5 7C22.5 6.73478 22.3946 6.48043 22.2071 6.29289C22.0196 6.10536 21.7652 6 21.5 6H7.5C7.23478 6 6.98043 6.10536 6.79289 6.29289C6.60536 6.48043 6.5 6.73478 6.5 7C6.5 7.26522 6.60536 7.51957 6.79289 7.70711C6.98043 7.89464 7.23478 8 7.5 8ZM7.5 11C7.30222 11 7.10888 11.0586 6.94443 11.1685C6.77998 11.2784 6.65181 11.4346 6.57612 11.6173C6.50043 11.8 6.48063 12.0011 6.51922 12.1951C6.5578 12.3891 6.65304 12.5673 6.79289 12.7071C6.93275 12.847 7.11093 12.9422 7.30491 12.9808C7.49889 13.0194 7.69996 12.9996 7.88268 12.9239C8.06541 12.8482 8.22159 12.72 8.33147 12.5556C8.44135 12.3911 8.5 12.1978 8.5 12C8.5 11.7348 8.39464 11.4804 8.20711 11.2929C8.01957 11.1054 7.76522 11 7.5 11ZM11.5 16C11.3022 16 11.1089 16.0586 10.9444 16.1685C10.78 16.2784 10.6518 16.4346 10.5761 16.6173C10.5004 16.8 10.4806 17.0011 10.5192 17.1951C10.5578 17.3891 10.653 17.5673 10.7929 17.7071C10.9327 17.847 11.1109 17.9422 11.3049 17.9808C11.4989 18.0194 11.7 17.9996 11.8827 17.9239C12.0654 17.8482 12.2216 17.72 12.3315 17.5556C12.4414 17.3911 12.5 17.1978 12.5 17C12.5 16.7348 12.3946 16.4804 12.2071 16.2929C12.0196 16.1054 11.7652 16 11.5 16ZM21.5 11H11.5C11.2348 11 10.9804 11.1054 10.7929 11.2929C10.6054 11.4804 10.5 11.7348 10.5 12C10.5 12.2652 10.6054 12.5196 10.7929 12.7071C10.9804 12.8946 11.2348 13 11.5 13H21.5C21.7652 13 22.0196 12.8946 22.2071 12.7071C22.3946 12.5196 22.5 12.2652 22.5 12C22.5 11.7348 22.3946 11.4804 22.2071 11.2929C22.0196 11.1054 21.7652 11 21.5 11ZM21.5 16H15.5C15.2348 16 14.9804 16.1054 14.7929 16.2929C14.6054 16.4804 14.5 16.7348 14.5 17C14.5 17.2652 14.6054 17.5196 14.7929 17.7071C14.9804 17.8946 15.2348 18 15.5 18H21.5C21.7652 18 22.0196 17.8946 22.2071 17.7071C22.3946 17.5196 22.5 17.2652 22.5 17C22.5 16.7348 22.3946 16.4804 22.2071 16.2929C22.0196 16.1054 21.7652 16 21.5 16Z" />
                        </svg>
                    </x-admin.menu-item>

                    <!-- Tests -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 @if(in_array(Request::segment(1), ['tasks'])){{ 'bg-slate-900' }}@endif"
                        x-data="{ open: {{ in_array(Request::segment(1), ['tasks']) ? 1 : 0 }} }">
                        <a class="block text-slate-200 hover:text-white truncate transition duration-150 @if(in_array(Request::segment(1), ['tasks'])){{ 'hover:text-slate-200' }}@endif"
                            href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 shrink-0"
                                        viewBox="0 0 24 24">
                                        <path fill="#94A3B8"
                                            d="M10.21,14.75a1,1,0,0,0,1.42,0l4.08-4.08a1,1,0,0,0-1.42-1.42l-3.37,3.38L9.71,11.41a1,1,0,0,0-1.42,1.42ZM21,2H3A1,1,0,0,0,2,3V21a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,20H4V4H20Z">
                                        </path>
                                    </svg>
                                    <span class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">{{ __('admin.tests') }}</span>
                                </div>
                                <!-- Icon -->
                                <div class="flex ml-2 duration-200 shrink-0 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">
                                    <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400 @if(in_array(Request::segment(1), ['tasks'])){{ 'rotate-180' }}@endif"
                                        :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                            <ul class="pl-9 mt-1 @if(!in_array(Request::segment(1), ['tasks'])){{ 'hidden' }}@endif"
                                :class="open ? '!block' : 'hidden'">
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('tasks-kanban')){{ '!text-indigo-500' }}@endif"
                                        href="#0">
                                        <span class="text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">List</span>
                                    </a>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is('tasks-list')){{ '!text-indigo-500' }}@endif"
                                        href="#0">
                                        <span
                                            class="text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">List</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- News -->
                    <x-admin.menu-item :route="'admin.news.index'" :title="__('admin.news')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 shrink-0" viewBox="0 0 24 24"
                             id="newspaper">
                            <path fill="#94A3B8"
                                  d="M17,11H16a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm0,4H16a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2ZM11,9h6a1,1,0,0,0,0-2H11a1,1,0,0,0,0,2ZM21,3H7A1,1,0,0,0,6,4V7H3A1,1,0,0,0,2,8V18a3,3,0,0,0,3,3H18a4,4,0,0,0,4-4V4A1,1,0,0,0,21,3ZM6,18a1,1,0,0,1-2,0V9H6Zm14-1a2,2,0,0,1-2,2H7.82A3,3,0,0,0,8,18V5H20Zm-9-4h1a1,1,0,0,0,0-2H11a1,1,0,0,0,0,2Zm0,4h1a1,1,0,0,0,0-2H11a1,1,0,0,0,0,2Z">
                            </path>
                        </svg>
                    </x-admin.menu-item>
                </ul>
            </div>
            <div>
                <h3 class="pl-3 text-xs font-semibold uppercase text-slate-500">
                    <span class="hidden w-6 text-center lg:block lg:sidebar-expanded:hidden 2xl:hidden"
                          aria-hidden="true">•••</span>
                    <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">{{ __('admin.users') }}</span>
                </h3>
                <ul class="mt-3">

                    <!-- Users -->
                    <x-admin.menu-item :route="'admin.users.index'" :title="__('admin.users')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 shrink-0" viewBox="0 0 24 24"
                             id="users">
                            <path fill="#94A3B8"
                                  d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z">
                            </path>
                        </svg>
                    </x-admin.menu-item>

                    <!-- Roles -->
                    <x-admin.menu-item :route="'admin.roles.index'" :title="__('admin.roles')">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="#94A3B8" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.63 3.65031C19.5138 3.55633 19.3781 3.48958 19.2327 3.45497C19.0873 3.42036 18.9361 3.41877 18.79 3.45031C17.7214 3.67425 16.6183 3.67711 15.5486 3.45869C14.4789 3.24028 13.4652 2.80522 12.57 2.18031C12.4026 2.06418 12.2037 2.00195 12 2.00195C11.7963 2.00195 11.5974 2.06418 11.43 2.18031C10.5348 2.80522 9.52108 3.24028 8.45137 3.45869C7.38166 3.67711 6.27857 3.67425 5.21001 3.45031C5.06394 3.41877 4.91267 3.42036 4.76731 3.45497C4.62194 3.48958 4.48618 3.55633 4.37001 3.65031C4.25399 3.74443 4.16053 3.86334 4.0965 3.99832C4.03247 4.1333 3.9995 4.28091 4.00001 4.43031V11.8803C3.99912 13.3141 4.34078 14.7273 4.99654 16.0023C5.6523 17.2773 6.60319 18.3771 7.77001 19.2103L11.42 21.8103C11.5894 21.9309 11.7921 21.9957 12 21.9957C12.2079 21.9957 12.4106 21.9309 12.58 21.8103L16.23 19.2103C17.3968 18.3771 18.3477 17.2773 19.0035 16.0023C19.6592 14.7273 20.0009 13.3141 20 11.8803V4.43031C20.0005 4.28091 19.9675 4.1333 19.9035 3.99832C19.8395 3.86334 19.746 3.74443 19.63 3.65031ZM18 11.8803C18.0008 12.9951 17.7353 14.0939 17.2257 15.0853C16.716 16.0768 15.977 16.9322 15.07 17.5803L12 19.7703L8.93001 17.5803C8.02304 16.9322 7.28399 16.0768 6.77435 15.0853C6.26472 14.0939 5.99924 12.9951 6.00001 11.8803V5.58031C8.09643 5.75974 10.196 5.27333 12 4.19031C13.804 5.27333 15.9036 5.75974 18 5.58031V11.8803ZM13.54 9.59031L10.85 12.2903L9.96001 11.3903C9.7717 11.202 9.51631 11.0962 9.25001 11.0962C8.9837 11.0962 8.72831 11.202 8.54001 11.3903C8.3517 11.5786 8.24591 11.834 8.24591 12.1003C8.24591 12.3666 8.3517 12.622 8.54001 12.8103L10.14 14.4103C10.233 14.504 10.3436 14.5784 10.4654 14.6292C10.5873 14.68 10.718 14.7061 10.85 14.7061C10.982 14.7061 11.1127 14.68 11.2346 14.6292C11.3564 14.5784 11.467 14.504 11.56 14.4103L15 11.0003C15.1883 10.812 15.2941 10.5566 15.2941 10.2903C15.2941 10.024 15.1883 9.76861 15 9.58031C14.8117 9.392 14.5563 9.28622 14.29 9.28622C14.0237 9.28622 13.7683 9.392 13.58 9.58031L13.54 9.59031Z" />
                        </svg>
                    </x-admin.menu-item>

                    <!-- Permissions -->
                    <x-admin.menu-item :route="'admin.permissions.index'" :title="__('admin.permissions')">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="#94A3B8" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 9V7C17 5.67392 16.4732 4.40215 15.5355 3.46447C14.5979 2.52678 13.3261 2 12 2C10.6739 2 9.40215 2.52678 8.46447 3.46447C7.52678 4.40215 7 5.67392 7 7V9C6.20435 9 5.44129 9.31607 4.87868 9.87868C4.31607 10.4413 4 11.2044 4 12V19C4 19.7956 4.31607 20.5587 4.87868 21.1213C5.44129 21.6839 6.20435 22 7 22H17C17.7956 22 18.5587 21.6839 19.1213 21.1213C19.6839 20.5587 20 19.7956 20 19V12C20 11.2044 19.6839 10.4413 19.1213 9.87868C18.5587 9.31607 17.7956 9 17 9ZM9 7C9 6.20435 9.31607 5.44129 9.87868 4.87868C10.4413 4.31607 11.2044 4 12 4C12.7956 4 13.5587 4.31607 14.1213 4.87868C14.6839 5.44129 15 6.20435 15 7V9H9V7ZM18 19C18 19.2652 17.8946 19.5196 17.7071 19.7071C17.5196 19.8946 17.2652 20 17 20H7C6.73478 20 6.48043 19.8946 6.29289 19.7071C6.10536 19.5196 6 19.2652 6 19V12C6 11.7348 6.10536 11.4804 6.29289 11.2929C6.48043 11.1054 6.73478 11 7 11H17C17.2652 11 17.5196 11.1054 17.7071 11.2929C17.8946 11.4804 18 11.7348 18 12V19Z" />
                        </svg>
                    </x-admin.menu-item>
                </ul>
            </div>
            <!-- More group -->
            <div>
                <h3 class="pl-3 text-xs font-semibold uppercase text-slate-500">
                    <span class="hidden w-6 text-center lg:block lg:sidebar-expanded:hidden 2xl:hidden"
                        aria-hidden="true">•••</span>
                    <span class="lg:hidden lg:sidebar-expanded:block 2xl:block">More</span>
                </h3>
                <ul class="mt-3">
                    <!-- Authentication -->
                    <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0" x-data="{ open: false }">
                        <a class="block transition duration-150 text-slate-200"
                            :class="open ? 'hover:text-slate-200' : 'hover:text-white'" href="#0"
                            @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="w-6 h-6 shrink-0" viewBox="0 0 24 24">
                                        <path class="fill-current text-slate-600" d="M8.07 16H10V8H8.07a8 8 0 110 8z" />
                                        <path class="fill-current text-slate-400" d="M15 12L8 6v5H0v2h8v5z" />
                                    </svg>
                                    <span
                                        class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">Authentication</span>
                                </div>
                                <!-- Icon -->
                                <div
                                    class="flex ml-2 duration-200 shrink-0 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">
                                    <svg class="w-3 h-3 ml-1 fill-current shrink-0 text-slate-400"
                                        :class="{ 'rotate-180': open }" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                        <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                            <ul class="mt-1 pl-9" :class="{ 'hidden': !open }" x-cloak>
                                <li class="mb-1 last:mb-0">
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <a class="block truncate transition duration-150 text-slate-400 hover:text-slate-200"
                                            href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            <span
                                                class="text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">Sign
                                                In</span>
                                        </a>
                                    </form>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <a class="block truncate transition duration-150 text-slate-400 hover:text-slate-200"
                                            href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            <span
                                                class="text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">Sign
                                                Up</span>
                                        </a>
                                    </form>
                                </li>
                                <li class="mb-1 last:mb-0">
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <a class="block truncate transition duration-150 text-slate-400 hover:text-slate-200"
                                            href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                            <span
                                                class="text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">Reset
                                                Password</span>
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Expand / collapse button -->
        <div class="justify-end hidden pt-3 mt-auto lg:inline-flex 2xl:hidden">
            <div class="px-3 py-2">
                <button @click="sidebarExpanded = !sidebarExpanded">
                    <span class="sr-only">Expand / collapse sidebar</span>
                    <svg class="w-6 h-6 fill-current sidebar-expanded:rotate-180" viewBox="0 0 24 24">
                        <path class="text-slate-400"
                            d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z" />
                        <path class="text-slate-600" d="M3 23H1V1h2z" />
                    </svg>
                </button>
            </div>
        </div>

    </div>
</div>