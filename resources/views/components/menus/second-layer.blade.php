@props(['item'])

@php
    $name = $item['name'];
    $items = $item['items'];
@endphp

<li class="multilevel-menu__list-item multilevel-menu__subitem">
    <div class="multilevel-menu__subitem-item">
        <div class="multilevel-menu__subitem-icon multilevel-menu__subitem-show">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="2.5" y="2.5" width="15" height="15" stroke="#808080" />
                <path d="M9.36805 14.24V5.76H10.628V14.24H9.36805ZM5.64805 10.6V9.42H14.348V10.6H5.64805Z"
                    fill="#808080" />
            </svg>
        </div>
        <div class="multilevel-menu__subitem-icon multilevel-menu__subitem-hide">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="2.5" y="2.5" width="15" height="15" stroke="#808080" />
                <path d="M7.38164 11.2V9.96H12.6216V11.2H7.38164Z" fill="#808080" />
            </svg>
        </div>

        @if (isset($item['url']))
            <a class="multilevel-menu__subitem-name" href="/{{ $item['url'] }}">{{ $name }}</a>
        @else
            <div class="multilevel-menu__subitem-name">{{ $name }}</div>
        @endif
        

        <div class="multilevel-menu__subitem-chevron">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.6769 9.39484C13.0116 9.72955 13.0116 10.2731 12.6769 10.6078L7.5358 15.749C7.20109 16.0837 6.65752 16.0837 6.32281 15.749C5.9881 15.4143 5.9881 14.8707 6.32281 14.536L10.8588 10L6.32549 5.46402C5.99078 5.12931 5.99078 4.58574 6.32549 4.25103C6.6602 3.91632 7.20376 3.91632 7.53847 4.25103L12.6796 9.39217L12.6769 9.39484Z"
                    fill="#586282" />
            </svg>
        </div>
    </div>


    <ul class="multilevel-menu__submenu">
        @foreach ($items as $subItem)
            @if (isset($subItem['url']) && isset($subItem['name']))
                <li class="multilevel-menu__list-item">
                    <a class="multilevel-menu__list-link" href="/{{ $subItem['url'] }}">{{ $subItem['name'] }}</a>
                </li>
            @endif
        @endforeach
    </ul>
</li>
