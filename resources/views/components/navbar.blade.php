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
                    <a class="nav-link" href="/">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('article.index') }}">
                        Tutti gli annunci
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown">
                        Categorie
                    </a>

                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item"
                                   href="{{ route('article.category', $category) }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                {{-- RICERCA --}}
                <li class="nav-item d-flex align-items-center">
                    <form action="{{ route('article.search') }}" method="GET"
                          class="d-flex search-form">

                        <input
                             type="text"
                             name="query"
                             class="form-control search-input"
                             placeholder="Cerca"
                             required...
                        >

                        <button type="submit"
                                class="btn btn-light search-button ms-2">
                            Cerca
                        </button>

                    </form>
                </li>

                @auth

                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('article.create') }}">
                            Inserisci annuncio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('revisor.index') }}">
                            Revisor
                            <span class="badge bg-danger">
                                {{ \App\Models\Article::toBeRevisedCount() }}
                            </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <form method="POST" action="/logout">
                            @csrf

                            <button type="submit"
                                    class="nav-link border-0 bg-transparent">
                                Logout
                            </button>
                        </form>
                    </li>

                @else

                    <li class="nav-item">
                        <a class="nav-link" href="/login">
                            Login
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/register">
                            Registrati
                        </a>
                    </li>

                @endauth

            </ul>

        </div>

    </div>
</nav>