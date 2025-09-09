<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Image Gallery | Minimage - Tailwind Image Gallery Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="MyraStudio" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.icon') }}">

    <!-- glightbox css -->
    <link rel="stylesheet" href="{{ asset('admin/libs/glightbox/css/glightbox.min.css') }}">

    <!-- Fonts Family Link  (Mandatory in All Pages) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Icons css  (Mandatory in All Pages) -->
    <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- App css  (Mandatory in All Pages) -->
    <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="icon" href="{{ asset('img/mwf_logo.png') }}" type="image/png">
    {{-- @if (app()->environment('local'))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else --}}
        <script src="https://cdn.tailwindcss.com"></script>
    {{-- @endif --}}
    
</head>

<body>

    <div class="wrapper">

        <!-- Start Sidebar -->
        <aside id="app-menu"
            class="hs-overlay fixed inset-y-0 start-0 z-60  w-sidenav min-w-sidenav bg-default-900 overflow-y-auto -translate-x-full transform transition-all duration-200 hs-overlay-open:translate-x-0 lg:bottom-0 lg:end-auto lg:z-30 lg:block lg:translate-x-0 rtl:translate-x-full rtl:hs-overlay-open:translate-x-0 rtl:lg:translate-x-0 print:hidden [--body-scroll:true] [--overlay-backdrop:true] lg:[--overlay-backdrop:false]">

            <div class="flex flex-col h-full">
                <!-- Sidenav Logo -->
                <div class="sticky top-0 flex h-topbar items-center justify-between px-6">
                    <a href="{{ route('admin.dashboard') }}">
                        <img src="{{ asset('/img/mwf_logo.png') }}" alt="logo" class="flex h-12">
                    </a>
                </div>

                <div class="p-4 h-[calc(100%-theme('spacing.topbar'))] flex-grow" data-simplebar>
                    <!-- Menu -->
                    <ul class="admin-menu hs-accordion-group flex w-full flex-col gap-1">
                        <li class="menu-item">
                            <a class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5"
                                href="{{ route('admin.dashboard') }}">
                                <i class="i-tabler-layout-2 text-2xl"></i>
                                DashBoard
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.posts.index') }}"
                                class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                <i class="i-tabler-clipboard text-2xl"></i>
                                <span class="menu-text">Posts & Events</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="maps-vector.html"
                                class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                <i class="i-tabler-user-circle text-2xl"></i>
                                <span class="menu-text"> Users </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.committees.index') }}"
                                class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5 hs-accordion-active:bg-default-100/5 hs-accordion-active:text-default-100">
                                <i class="i-tabler-photo text-2xl"></i>
                                <span class="menu-text"> Committees </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="icons.html"
                                class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                <i class="i-tabler-icons text-2xl"></i>
                                <span class="menu-text"> Achements </span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <form action="{{ route('logout') }}" method="post"
                                class="group flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-100 transition-all hover:bg-default-100/5">
                                @csrf

                                <button type="submit" tabindex="0" role="menuitem"
                                    class="flex items-center gap-x-3.5 ">
                                    <span class="i-tabler-checkbox text-2xl"></span>
                                    <span class="menu-text">
                                        {{ __('auth.logout') }}
                                    </span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>

            </div>
        </aside>
        <!-- End Sidebar -->

        <!-- Start Page Content here -->
        <div class="page-content">

            <main>
                @yield('content')
            </main>

            <!-- Footer Start -->
            <footer class="footer bg-default-100 flex items-center py-5">
                <div class="container flex md:justify-between justify-center w-full gap-4">
                    <div>
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © MWF
                    </div>
                    <div class="md:flex hidden gap-2 item-center md:justify-end">
                        Design &amp; Develop by<a href="#" class="text-primary">Developer</a>
                    </div>
                </div>
            </footer>
            <!-- Footer End -->

        </div>
        <!-- End Page content -->

    </div>

    <!-- Plugin Js (Mandatory in All Pages) -->
    <script src="{{ asset('admin/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/libs/preline/preline.js') }}"></script>
    <script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>

    <!-- App Js (Mandatory in All Pages) -->
    <script src="{{ asset('admin/js/app.js') }}"></script>

    <!-- Shuffle JS -->
    <script src="{{ asset('admin/libs/shufflejs/shuffle.min.js') }}"></script>

    <!-- glightbox js -->
    <script src="{{ asset('admin/libs/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Filtter Demo js -->
    <script src="{{ asset('admin/js/pages/gallery.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
