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
            @canany(['user-anyView', 'user-create', 'user-edit', 'user-view', 'user-delete'])
                <x-sidebar-tab route="{{ route('admin.users.index') }}" icon="fe-users" name="{{ __('admin.users') }}" />
            @endcanany

        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>{{ __('admin.components') }}</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            {{-- Services --}}
            @canany(['service-anyView', 'service-create', 'service-edit', 'service-view', 'service-delete'])
                <x-sidebar-tab route="{{ route('admin.services.index') }}" icon="fe-layers"
                    name="{{ __('admin.service') }}" />
            @endcanany
            @canany(['feature-anyView', 'feature-create', 'feature-edit', 'feature-view', 'feature-delete'])
                <x-sidebar-tab route="{{ route('admin.features.index') }}" icon="fe-bookmark"
                    name="{{ __('admin.features') }}" />
            @endcanany
            @canany(['message-anyView', 'message-create', 'message-edit', 'message-view', 'message-delete'])
                <x-sidebar-tab route="{{ route('admin.messages.index') }}" icon="fe-message-circle"
                    name="{{ __('admin.messages') }}" counter="{{ $countMessages }}" />
            @endcanany
            @canany(['subscriber-anyView', 'subscriber-create', 'subscriber-edit', 'subscriber-view',
                'subscriber-delete'])
                <x-sidebar-tab route="{{ route('admin.subscribers.index') }}" icon="fe-users"
                    name="{{ __('admin.subscribers') }}" counter="{{ $countSubscribers }}" />
            @endcan
            @canany(['testmonial-anyView', 'testmonial-create', 'testmonial-edit', 'testmonial-view',
                'testmonial-delete'])
                <x-sidebar-tab route="{{ route('admin.testmonials.index') }}" icon="fe-mic"
                    name="{{ __('admin.testmonials') }}" />
            @endcanany
            @canany(['member-anyView', 'member-create', 'member-edit', 'member-view', 'member-delete'])
                <x-sidebar-tab route="{{ route('admin.members.index') }}" icon="fe-users"
                    name="{{ __('admin.members') }}" />
            @endcanany
            @canany(['client-anyView', 'client-create', 'client-edit', 'client-view', 'client-delete'])
                <x-sidebar-tab route="{{ route('admin.clients.index') }}" icon="fe-users"
                    name="{{ __('admin.clients') }}" />
            @endcanany
            @canany(['setting-anyView', 'setting-create', 'setting-edit', 'setting-view', 'setting-delete'])
                <x-sidebar-tab route="{{ route('admin.settings.index') }}" icon="fe-settings"
                    name="{{ __('admin.settings') }}" />
            @endcanany
        </ul>

    </nav>
</aside>
