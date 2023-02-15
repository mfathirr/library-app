<div class="navbar bg-base-100 bg-slate-600 sticky top-0 z-50">
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
                <img src="https://lh3.googleusercontent.com/pw/AMWts8A-ZIQ0RKlfl2GovLWDCFYgOpUBdMkWbN9XysxughYXIzQYWiiUglACEPzMFGSE_1Upe7T2I0WXSkPJ2AE87sSnCnpyGfJpeKUZ1Y-Wlv-FGJEehLSoS1IG_6Y46QEljITojLdezIQO5y2wmM92unPE=w1244-h933-no?authuser=0" />
              </div>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
              <li>
                <a class="justify-between">
                  Profile
                  <span class="badge">New</span>
                </a>
              </li>
              <li><a>Settings</a></li>
              <li><a>Logout</a></li>
            </ul>
          </div>
        </div>
    </div>
  </div>