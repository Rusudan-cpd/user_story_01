<x-layout>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-5">

                <h1 class="text-center mb-4">{{ __('ui.registerTitle') }}</h1>

                <form method="POST" action="/register">

                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">
                            {{ __('ui.name') }}
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">
                            {{ __('ui.email') }}
                        </label>

                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">
                            {{ __('ui.password') }}
                        </label>

                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">
                            {{ __('ui.confirmPassword') }}
                        </label>

                        <input
                            type="password"
                            class="form-control"
                            id="password_confirmation"
                            name="password_confirmation"
                            required>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('ui.registerTitle') }}
                    </button>

                </form>

            </div>
        </div>
    </div>

</x-layout>