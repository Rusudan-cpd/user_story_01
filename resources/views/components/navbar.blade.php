<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">

        <a class="navbar-brand" href="/">
            ✈️ Presto Travel
        </a>

        <x-_locale lang="it"/>
        <x-_locale lang="uk"/>
        <x-_locale lang="es"/>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/">
                        {{ __('ui.home') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="{{ route('article.index') }}">
                        {{ __('ui.allArticles') }}
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown">
                        {{ __('ui.categories') }}
                    </a>

                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item"
                                   href="{{ route('article.category', $category) }}">
                                    {{ __("ui.$category->name") }}
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
                            placeholder="{{ __('ui.search') }}"
                            required
                        >

                        <button type="submit"
                                class="btn btn-light search-button ms-2">
                            {{ __('ui.search') }}
                        </button>

                    </form>
                </li>

                @auth

                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('article.create') }}">
                            {{ __('ui.insertArticle') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('revisor.index') }}">
                            {{ __('ui.revisor') }}
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
                                {{ __('ui.logout') }}
                            </button>
                        </form>
                    </li>

                @else

                    <li class="nav-item">
                        <a class="nav-link" href="/login">
                            {{ __('ui.login') }}
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/register">
                            {{ __('ui.register') }}
                        </a>
                    </li>

                @endauth

            </ul>

        </div>

    </div>
</nav>