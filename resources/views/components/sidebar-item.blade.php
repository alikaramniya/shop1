@props([
    'icon' => 'icon-tasks',
    'title',
    'sub' => 1,
    'subTitles' => '{}' 
])
<li class="sub-menu">
    <a href="#" class="">
        <i class="{{ $icon }}"></i>
        <span>{{ $title }}</span>
        <span class={{ !!$sub ? "arrow" : "" }}></span>
    </a>
    @if (!!$sub)
        <ul class="sub">
            @foreach (json_decode($subTitles, true) as $address => $title)
                <li><a class="" href="{{ $address }}">{{ $title }}</a></li>
            @endforeach
        </ul>
    @endif
</li>
