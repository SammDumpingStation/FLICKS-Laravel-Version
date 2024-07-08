<x-customer.layout>
    <form action="/logout" method="post">
        @csrf
        @auth
            <p>{{ Auth::user()->first_name }}</p>
            <button>Logout</button>
        @endauth
        @guest
            <header>Hello</header>
            <a href="/auth">Login</a>
        @endguest
    </form>
</x-customer.layout>
