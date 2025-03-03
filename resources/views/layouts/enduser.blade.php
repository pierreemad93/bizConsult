<!DOCTYPE html>
<html lang="en">

@include('enduser.partials.head')

<body>
    <div class="container-xxl bg-white p-0">
        @include('enduser.partials.loader')


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">

            @include('enduser.partials.navbar')
            @yield('hero')
          
        </div>
        <!-- Navbar & Hero End -->
        @yield('content')



        @include('enduser.partials.footer')
    </div>

    @include('enduser.partials.scripts')
</body>

</html>
