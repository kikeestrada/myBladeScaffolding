<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('template.utilities.head.meta-tags')
        @include('template.utilities.head.google-fonts')
        <title>MyBookie -  @yield('title-page')</title>
        @include('template.utilities.analitics.googlePixelHead')
        @include('template.utilities.head.openGraph')
        @include('template.utilities.head.twetterCard')
        @include('template.utilities.head.cssFiles')
    </head>
    <body class="@yield('body_class')">
        <header class="main-header">
            <h1>This is the Laravel Main Header</h1>
            @yield('header')
        </header>
        <main class="main-container">
            <h1>This is the Laravel Main Container</h1>
            @yield('content')

        </main>
        <footer class="main-footer">
            <h1>This is the Laravel Main Footer</h1>
            @yield('footer')
        </footer>
        @include('template.utilities.analitics.facebookPixel')
        @include('template.utilities.analitics.googlePixel')
        @include('template.utilities.bodyElements.jsFiles')
        @yield('js-scripts')
    </body>
</html>
