<header id="header_wrapper">
    <div class="container">
        <div class="header_box">
            <div class="logo"><a href="#"><img src="img/logo.png" alt="logo"></a></div>
            @if(isset($menu))
                <nav class="navbar navbar-expand-lg navbar-inverse navbar-light" role="navigation">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="main-nav" class="collapse navbar-collapse navStyle">
                        <ul class="nav navbar-nav" id="mainNav">
                            @foreach ($menu as $item)
                                <li><a href="#{{ $item['alias'] }}" class="scroll-link">{{ $item['title'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
            @endif
        </div>
    </div>
</header>

