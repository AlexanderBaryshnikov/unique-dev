@if(isset($pages) && is_object($pages))
    @foreach($pages as $k => $page)
        @if(!$k % 2)
            @include('sections.pages.left-alignment')
        @else
            @include('sections.pages.right-alignment')
        @endif
    @endforeach
@endif
