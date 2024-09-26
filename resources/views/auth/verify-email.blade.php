<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Köszönjük, hogy feliratkoztál! Mielőtt elkezdenénk, erősítse meg e-mail címét az e-mailben küldött linkre kattintva. Ha nem kapta meg az e-mailt, szívesen küldünk Önnek egy másikat.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A regisztráció során megadott e-mail címre új ellenőrző linket küldtünk.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Megerősítő email újraküldése') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Kijelentkezés') }}
            </button>
        </form>
    </div>
</x-guest-layout>
