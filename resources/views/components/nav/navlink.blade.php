@props(['label', 'href', 'active' => false, 'button'])


<li class="nav-item">
    <a class="nav-link {{ $active == true ? 'active' : '' }}" aria-current="page"
        href="{{ $href }}">{{ $label }}</a>
</li>
