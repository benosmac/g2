<header class="banner relative z-10 grid grid-cols-2 gap-10 px-10 py-5">
    <a class='text-brand-colour' href="{{ home_url('/') }}">
        {!! $siteName !!}
    </a>

    @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            {!! wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'menu_class' => 'nav flex gap-10 justify-end',
                'echo' => false,
            ]) !!}
        </nav>
    @endif
</header>
