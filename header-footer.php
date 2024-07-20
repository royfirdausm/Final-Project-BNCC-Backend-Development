<!-- resources/views/partials/header.blade.php -->
<header>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li><a href="{{ route('carts.index') }}">Cart</a></li>
                <li><a href="{{ route('invoices.index') }}">Invoices</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @endguest
        </ul>
    </nav>
</header>
