{{-- @php
    $links = [
        [
            'url' => '/',
            'label' => 'Home',
            'active' => true,
        ],
        [
            'url' => '/chi-siamo',
            'label' => 'Chi siamo',
            'active' => true,
        ],
        [
            'url' => '/contatti',
            'label' => 'Contatti',
            'active' => false,
        ],
    ];
@endphp --}}

<header>
    <nav>
        <figure>
            <img src=" {{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo" height="60"> 
        </figure>
        <ul>
            @foreach ($menuLinks as $element)
                <li>    
                    {{-- <a href="{{ $link['url'] }}">
                        {{ $link['label'] }}
                    </a> --}}
                    <a href="#">{{ $element['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
