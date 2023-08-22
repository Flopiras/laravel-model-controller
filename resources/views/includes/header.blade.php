<header>
        {{-- navbar --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              <a class="navbar-brand" href="{{ route('home') }}">{{env('APP_NAME') }}</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    {{-- home --}}
                  <li class="nav-item">
                    <a class="nav-link @if(Route::is('home')) active @endif" aria-current="page" href="{{ route('home') }}">Home</a>
                  </li>
                  {{-- about --}}
                  <li class="nav-item">
                    <a class="nav-link @if(Route::is('about')) active @endif" aria-current="page" href="{{ url('/about') }}">Chi Siamo</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
</header>