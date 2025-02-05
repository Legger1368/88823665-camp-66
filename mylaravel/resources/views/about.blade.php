@extends('structure')
@section('title')
    เกี่ยวกับเรา
@endsection
@section('content')
    <h2>เกี่ยวกับเรา</h2>
    <hr>
    <p>ผู้พัฒนาระบบ : {{ $name }}</p>
    <p>วันเกิดผู้พัฒนาระบบ : {{ $date }}</p>
    <p>
        Responsive behaviors
        Navbars can use .navbar-toggler, .navbar-collapse, and .navbar-expand{-sm|-md|-lg|-xl|-xxl} classes to determine
        when their content collapses behind a button. In combination with other utilities, you can easily choose when to
        show or hide particular elements.

        For navbars that never collapse, add the .navbar-expand class on the navbar. For navbars that always collapse, don’t
        add any .navbar-expand class.

        Toggler
        Navbar togglers are left-aligned by default, but should they follow a sibling element like a .navbar-brand, they’ll
        automatically be aligned to the far right. Reversing your markup will reverse the placement of the toggler. Below
        are examples of different toggle styles.

        With no .navbar-brand shown at the smallest breakpoint:
    </p>
@endsection
