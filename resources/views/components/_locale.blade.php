<form action="{{ route('setLocale', ['lang' => $lang]) }}" method="POST">
    @csrf

    <button type="submit" class="btn">
        <img src="{{ asset('vendor/blade-flags/country-' . $lang . '.svg') }}"
             alt="{{ $lang }}"
             width="30">
    </button>
</form>