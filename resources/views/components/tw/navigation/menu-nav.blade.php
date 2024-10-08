<nav>
    <h6 class="footer-title">{{ $title }}</h6>
    @foreach($items as $content)
    <a class="link link-hover">{{ $content }}</a>
    @endforeach
</nav>