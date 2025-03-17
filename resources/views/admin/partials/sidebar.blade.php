<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <x-sidebar-tab route="{{ route('admin.home') }}" icon="fe-home" name="{{ __('admin.home') }}" />
            <x-sidebar-tab route="{{ route('index') }}" icon="fe-layout" name="{{ __('admin.visit') }}" />


        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>{{ __('admin.components') }}</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            {{-- Services --}}
            <x-sidebar-tab route="{{ route('admin.services.index') }}" icon="fe-layers"
                name="{{ __('admin.service') }}" />
            <x-sidebar-tab route="{{ route('admin.features.index') }}" icon="fe-bookmark"
                name="{{ __('admin.features') }}" />
            <x-sidebar-tab route="{{ route('admin.messages.index') }}" icon="fe-message-circle"
                name="{{ __('admin.messages') }}" />
            <x-sidebar-tab route="{{ route('admin.subscribers.index') }}" icon="fe-users"
                name="{{ __('admin.subscribers') }}" />
            <x-sidebar-tab route="{{ route('admin.testmonials.index') }}" icon="fe-mic"
                name="{{ __('admin.testmonials') }}" />
            <x-sidebar-tab route="{{ route('admin.members.index') }}" icon="fe-users"
                name="{{ __('admin.members') }}" />
            <x-sidebar-tab route="{{ route('admin.clients.index') }}" icon="fe-users"
                name="{{ __('admin.clients') }}" />
            <x-sidebar-tab route="{{ route('admin.settings.index') }}" icon="fe-settings"
                name="{{ __('admin.settings') }}" />
        </ul>

    </nav>
</aside>
