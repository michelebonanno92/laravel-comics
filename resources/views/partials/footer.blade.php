<footer>
    <div>
        <nav>
            <div>
                <h4>DC COMICS</h4>
                <ul>
                    @foreach ( $menuLinksDcComics as $item)
                        <li>
                            <a href="{{ $item['link'] }}">{{ $item['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
                <h4>SHOP</h4>
                <ul>
                    @foreach ( $menuLinksShop as $item)
                        <li>
                            <a href="{{ $item['link'] }}">{{ $item['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
                <h4>DC</h4>
                <ul>
                    @foreach ( $menuLinksDc as $item)
                        <li>
                            <a href="{{ $item['link'] }}">{{ $item['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
                <h4>SITES</h4>
                <ul>
                    @foreach ( $menuLinksSites as $item)
                        <li>
                            <a href="{{ $item['link'] }}">{{ $item['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
</footer>
