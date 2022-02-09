<x-main-layout>
    <div class="min-h-full flex flex-col justify-center items-center py-12 sm:px-6 lg:px-8">
        <div class="w-full items-center justify-center text-center">
            <h1>
                Welcome, {{ Auth::user()->email }}!
            </h1>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="text-sky-500 hover:text-sky-800" type="submit">Logout</button>
            </form>
        </div>
    </div>
</x-main-layout>