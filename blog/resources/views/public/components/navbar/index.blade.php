<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto"><a href="index">Blog</a></h1>
        <nav class="nav-menu d-none d-lg-block">
            <ul class="align-items-center">
                <li class="active"><a href="home">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="pricing">Pricing</a></li>

                @include('public.components.blog.index')

                <li><a href="contact">Contact</a></li>

                <li class="ml-5">
                    @include('public.components.selects.languages.index')
                </li>

                <li><a href="panel">Login</a></li>
            </ul>
        </nav>
    </div>
</header>