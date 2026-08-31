<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">

        <a class="navbar-brand" href="/">
            ✈️ Presto Travel
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link text-white fw-bold fs-5" href="/">
                        Home
                    </a>
                </li>

                @auth

                    <li class="nav-item">
                      <a class="nav-link text-white fw-bold fs-5" href="{{ route('article.create') }}">
                            Inserisci annuncio
                        </a>
                    </li>

                    <li class="nav-item">
                        <form method="POST" action="/logout">
                            @csrf

                            <button type="submit"
                                    class="nav-link text-white fw-bold fs-5 border-0 bg-transparent">
                                Logout
                            </button>
                        </form>
                    </li>

                @else

                    <li class="nav-item">
                        <a class="nav-link text-white fw-bold fs-5" href="/login">
                            Login
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white fw-bold fs-5" href="/register">
                            Registrati
                        </a>
                    </li>

                @endauth

            </ul>

        </div>

    </div>
</nav>