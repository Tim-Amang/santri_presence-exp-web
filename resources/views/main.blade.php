<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="{{ asset('image/logo/santri-presence-icon.png') }}" type="image/png">
        <title>@yield('title')</title>
        @include('style')
    </head>
    <body class="sb-nav-fixed">
        @include('navbar')
        <div id="layoutSidenav">
            @include('sidenav')
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
                @include('footer')
            </div>
        </div>
        <script>
            function darkmode() {
                var sidebar = document.getElementById("sidenavAccordion");
                var navbar = document.getElementById("navbarAccordion");
                var icon = document.getElementById("darkmodeIcon");
                var button = document.getElementById("darkmodeButton");
                var text = document.getElementById("darkmodeText");
                sidebar.classList.toggle("sb-sidenav-dark");
                sidebar.classList.toggle("sb-sidenav-light");
                navbar.classList.toggle("bg-dark");
                navbar.classList.toggle("bg-light");
                navbar.classList.toggle("navbar-dark");
                navbar.classList.toggle("navbar-light");
                if (text.innerHTML == "Dark Mode") {
                    text.innerHTML = "Light Mode";
                } else {
                    text.innerHTML = "Dark Mode";
                }
                icon.classList.toggle("fa-moon");
                icon.classList.toggle("fa-sun");
                button.classList.toggle("btn-secondary");
                button.classList.toggle("btn-light");
            }
        </script>
        @include('script')
    </body>
</html>
