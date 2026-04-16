<div class="max-w-full shadow-lg">
    @auth
        <div class="mx-auto max-w-[90rem] navbar bg-base-100 shadow-sm">
            <div class="flex gap-x-3">
                <div class="navbar-start">
                    <a href="/projects" class="btn btn-ghost text-xl">My Projects</a>
                </div>
                <div class="navbar-start hidden lg:flex">
                    <ul class="menu menu-horizontal px-1">
                        <li><a class="btn btn-ghost text-xl" href="/projects/create">New Project</a></li>
                    </ul>
                </div>
            </div>
            <div class="ml-18">
            <span>
          <h1 class="text-3xl font-bold">ZOUHAIR MESSOUDI</h1>
          <span class="text-rotate">
            <span>
              <span class="bg-teal-400 text-teal-800 px-2">SOFTWARE ENGINEER</span>
              <span class="bg-red-400 text-red-800 px-2">BACKEND ENGINEER</span>
              <span class="bg-blue-400 text-blue-800 px-2">VOLLEYBALL LOVER</span>
              <span class="bg-green-400 text-green-800 px-2">EPISTEMOPHILE </span>
            </span>
          </span>
        </span>
            </div>
            <div class="navbar-end flex gap-x-2">
                <form action="/logout" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary btn-outline btn-md">Logout</button>
                </form>
            </div>
        </div>
    @endauth
    @guest
        <div class="flex mx-24 min-h-18">
            <div class="navbar-start">
                <a href="/projects" class="hover:underline btn btn-ghost text-xl">Home</a>
            </div>
            <div class="navbar-end flex gap-x-4">
                <a href="/login" class="btn btn-primary">Login</a>
                <a href="/register" class="btn btn-primary">Register</a>
            </div>
        </div>
    @endguest
</div>
