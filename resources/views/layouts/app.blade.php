<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials.head')
</head>
<body>
    <div id="app">
        @include('layouts.partials.nav')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @guest
        @include('layouts.partials.footer')
    @else
        @unless (Auth::user()->isAdmin())
            @include('layouts.partials.footer')
        @endunless
    @endguest
</body>
</html>
