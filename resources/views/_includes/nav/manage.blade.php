<div class="side-menu">
    <aside class="menu m-t-30 m-l-10">
        <p class="menu-label">
            General
        </p>
        <ul class="menu-list">
        <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
        </ul>

        <p class="menu-label">
            Administratie
        </p>
        <ul class="menu-list">
            <li><a href="{{route('users.index')}}">Gebruikers beheren</a></li>
            <li>
                <a href="{{route('permissions.index')}}">Rollen en Toegang</a>
                <ul>
                    <li><a href="{{route('roles.index')}}">Rollen</a></li>
                    <li><a href="{{route('permissions.index')}}">Toegang</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>