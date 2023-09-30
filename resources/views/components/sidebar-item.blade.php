@props([
'icon' => 'icon-tasks',
'title',
'sub' => 1,
'subTitles' => ''
])
<li class="sub-menu">
    @php
        $arraySubTitles = explode(',', $subTitles);

        foreach($arraySubTitles as $items) {
            $key = (string)str($items)->reverse()->after(':')->reverse();

            $arr[$key] = (string)str($items)->reverse()->before(':')->reverse();
        }
    @endphp

    <a href="#" class="">
        <i class="{{ $icon }}"></i>
        <span>{{ $title }}</span>
        <span class={{ !!$sub ? "arrow" : "" }}></span>
    </a>
    @if (!!$sub)
        <ul class="sub">
            @foreach ($arr as $address => $title)
            <li>
                <a style="padding-right:5px" href="{{ $address }}">
                    {{ $title }}</a>
            </li>
            @endforeach
        </ul>
    @endif
</li>
