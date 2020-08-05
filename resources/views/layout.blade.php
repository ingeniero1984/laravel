<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8" />

        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}" />
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}"/>
        <script src="{{ mix('js/app.js') }}" type="text/javascript" async defer></script>
    </head>

    <body>
        <div id="app" class="d-flex flex-column h-screen justify-content-between">
            <header>
                @include('partials.nav') @include('partials.session-status')
            </header>

            <main class="py-4">
                @yield('content')
            </main>

            <footer class="bg-dark text-center text-white-50 py-4 shadow">

                <div class="container">
                    <!-- Grid row-->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-12">

                            <div class="mb-2 flex-center">
                                <!-- Twitter -->
                                <a href="https://twitter.com/Lermyferrer" target="_blank" class="tw-ic">
                                    <i class="fab fa-twitter fa-lg  mr-md-3 mr-3"> </i>
                                </a>
                                <!--Linkedin -->
                                <a href="https://www.linkedin.com/in/ing-lermy-ferrer-6a620668" target="_blank" class="li-ic">
                                    <i class="fab fa-linkedin fa-lg white-text mr-md-3 mr-3"> </i>
                                </a>
                                <!--correo-->
                                <a href="mailto:ingeniero.lermy84@gmail.com" target="_blank" class="mail-ic">
                                    <i class="fas fa-envelope fa-lg white-text mr-md-3 mr-3"> </i>
                                </a>
                                <!--github-->
                                <a href="https://github.com/ingeniero1984" target="_blank" class="git-ic">
                                    <i class="fab fa-github fa-lg white-text mr-md-3 mr-3"> </i>
                                </a>

                            </div>

                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row-->
                </div>

                <h6 style="color: #fff">Lermy Ferrer Peralta | Copyright &copy {{ date('Y') }}</h6>

            </footer>

        </div>

        @include('sweetalert::alert')
    </body>
</html>
