@extends('structure')
@section('title')
    หน้าแรกของเว็บไวต์
@endsection
@section('content')
    <h2>หน้าแรกของเว็บไซต์</h2>
    <p>
        Color schemes
        New dark navbars in v5.3.0 — We’ve deprecated .navbar-dark in favor of the new data-bs-theme="dark". Add
        data-bs-theme="dark" to the .navbar to enable a component-specific color mode. Learn more about our color modes.

        New in v5.2.0 — Navbar theming is now powered by CSS variables and .navbar-light has been deprecated. CSS variables
        are applied to .navbar, defaulting to the “light” appearance, and can be overridden with .navbar-dark.

        Navbar themes are easier than ever thanks to Bootstrap’s combination of Sass and CSS variables. The default is our
        “light navbar” for use with light background colors, but you can also apply data-bs-theme="dark" to the .navbar
        parent for dark background colors. Then, customize with .bg-* and additional utilities.
    </p>
@endsection
