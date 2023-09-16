  <nav class="bg-white sidebar sidebar-offcanvas mt-3" id="sidebar">
      <ul class="nav">
          <li class="nav-item {{Route::is('dashboard') ? 'active' : ''}}">
              <b>HOME</b>
              <a class="nav-link href="{{ route('dashboard') }}">
                  <img src="{{ asset('assets/images/icons/1.png') }}" alt="">
                  <span class="menu-title">Dashboard</span>
              </a>
          </li>
          <li class="nav-item {{Route::is('bo-surat') ? 'active' : ''}}">
              <a class="nav-link" href="{{ route('bo-surat') }}">
                  <img src="{{ asset('assets/images/icons/2.png') }}" alt="">
                  <span class="menu-title">Surat</span>
              </a>
          </li>
          <li class="nav-item {{Route::is('bo-pj') ? 'active' : ''}}">
              <a class="nav-link" href="{{ route('bo-pj') }}">
                  <img src="{{ asset('assets/images/icons/6.png') }}" alt="">
                  <span class="menu-title">Penanggung Jawab</span>
              </a>
          </li>
          @if (auth()->user()->scope == "super-admin")
          <li class="nav-item {{Route::is('bo-akun') ? 'active' : ''}}">
            <hr>
            <b class="text-gray">MANAGE USER</b>
            <a class="nav-link" href="{{ route('bo-akun') }}">
                <img src="{{ asset('assets/images/icons/10.png') }}" alt="">
                <span class="menu-title">Account</span>
            </a>
        </li>
          @endif
      </ul>
  </nav>
