<!doctype html>
<html @php(language_attributes()) class='relative bg-secondary-colour'>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @php(do_action('get_header'))
        @php(wp_head())
        @livewireStyles
    </head>

    <body @php(body_class())>
        @php(wp_body_open())

        <div id="app" class='py-5'>
            <a class="sr-only focus:not-sr-only" href="#main">
                {{ __('Skip to content') }}
            </a>

            @include('sections.header')

            <main id="main" class="main static">
                @yield('content')
            </main>

            @hasSection('sidebar')
                <aside class="sidebar">
                    @yield('sidebar')
                </aside>
            @endif

            @include('sections.footer')
        </div>

        @php(do_action('get_footer'))
        @php(wp_footer())
        @livewireScripts
    </body>

</html>
