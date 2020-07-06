<!-- Header section -->
<header class="header-section">
    <div class="logo">
        @foreach ($navlogo as $item)
    <a href="{{$item->url}}"><img src="{{$item->logo}}" alt=""></a><!-- Logo -->
        @endforeach
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            @foreach ($navtitre as $item)
            {{-- titre et lien de la navbar --}}
        <li><a href="{{$item->url}}"> {{$item->title}} </a></li>
               
           @endforeach
        </ul>
    </nav>
</header>
<!-- Header section end -->