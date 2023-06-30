<header>
    <ul class="nav nav-pills nav-fill bg-white">

        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'posts' ? 'active' : '' }}" href="{{ route('posts') }}">Elenco Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'active' : '' }}" href="{{ route('contacts') }}">Contatti</a>
        </li>

      </ul>
</header>
