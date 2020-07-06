<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            @foreach ($navlogo as $item)
            {{-- img navbar change celle-ci aussi --}}
            <img src="{{$item->logo}}" alt=""> {{-- logo--}}
            <p>Get your freebie template now!</p>
            @endforeach
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        <div class="item  hero-item" data-bg="img/01.jpg"></div>
        <div class="item  hero-item" data-bg="img/02.jpg"></div>
    </div>
</div>
<!-- Intro Section -->