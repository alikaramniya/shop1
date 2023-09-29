@props([
    'icon' => 'icon-tasks',
    'title',
    'sub' => 1,
    'subTitles' => '{}' 
])
<li class="sub-menu">
    @php

        $arraySubTitles = str($subTitles)->replace('{', '')->replace('}', '')->explode(',');

        foreach($arraySubTitles as $items) {
            $count = strpos(strrev(trim($items)), ':');
            $newStr = substr(strrev(trim($items)), $count+1);
            $str = strrev(trim($newStr));
            $str2 = substr(strrev(trim($items)), 0, $count);
            $str3 = strrev(trim($str2));

            if (!str_contains($str, '"')) {
                $str = '"' . $str . '"';
            }

            $array[$str] = $str3;
        }

        $newSubTitles = json_encode($array);
        

    @endphp

    <a href="#" class="">
        <i class="{{ $icon }}"></i>
        <span>{{ $title }}</span>
        <span class={{ !!$sub ? "arrow" : "" }}></span>
    </a>
    @if (!!$sub)
        <ul class="sub">
            @foreach (json_decode($newSubTitles, true) as $address => $title)
                <li><a class="" href="{{ $address }}">{{ $title }}</a></li>
            @endforeach
        </ul>
    @endif
</li>
