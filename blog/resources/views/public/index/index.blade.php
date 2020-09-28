<!DOCTYPE html>

<html>
@include('index.head')

<body>
    @include('public.components.navbar.index')

    @yield('content')

    <div id="footer">
        <p class="d-flex h-100 mb-0 justify-content-center align-items-center">
            This is a wider card with supporting text below as a natural lead-in to additional content. @2020
        </p>
    </div>
</body>

</html>