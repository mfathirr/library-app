<div class="navbar bg-base-100 bg-slate-400 sticky top-0 z-50">
    <div class="navbar-start">
      <div class="dropdown">
        <label tabindex="0" class="btn btn-ghost btn-circle">
          <svg class="w-[29px]" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
        </label>
        <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 drop-shadow-md bg-base-100 rounded-box w-52">
          <li><a href="{{ url("/") }}">Home</a></li>
          <li><a href="{{ url("/book") }}">List of Book</a></li>
        </ul>
      </div>
    </div>
    <div class="navbar-center">
      <a class="normal-case text-xl font-bold font-['Helvetica']">Book List of Library</a>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
      </svg>      
    </div>
    <div class="navbar-end">
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full">
                @if (Auth::user())
                <img src="https://lh3.googleusercontent.com/pw/AMWts8A-ZIQ0RKlfl2GovLWDCFYgOpUBdMkWbN9XysxughYXIzQYWiiUglACEPzMFGSE_1Upe7T2I0WXSkPJ2AE87sSnCnpyGfJpeKUZ1Y-Wlv-FGJEehLSoS1IG_6Y46QEljITojLdezIQO5y2wmM92unPE=w1244-h933-no?authuser=0" />
                @else
                <img src="data:image/png;base64,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" />
                @endif
              </div>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
              @guest
              <li><a href="{{route("register")}}">Register</a></li>
              <li><a href="{{route("login")}}">Login</a></li>
              @else
              <li><a href="{{route("logout")}}" onclick="event.preventDefault();  
                document.getElementById('logout-form').submit();">Logout</a>
              </li>
              <form action="{{route('logout')}}" id="logout-form" method="POST">
                @csrf
              </form>
              @endguest
            </ul>
          </div>
        </div>
    </div>
  </div>