    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" tabindex="0" role="menuitem" class="dropdown-item">
            Logout
        </button>
    </form>
