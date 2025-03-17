@props(['route', 'icon', 'name', 'counter'])
<li class="nav-item w-100">
    <a class="nav-link" href="{{ $route }}">
        <i class="fe {{ $icon }} fe-16"></i>
        <span class="ml-3 item-text">{{ $name }}</span>
        @isset($counter)
            <span class="badge badge-pill badge-primary">{{ $counter }}</span>
        @endisset

    </a>
</li>
