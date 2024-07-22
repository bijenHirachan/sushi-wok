<nav class="flex justify-between items-center">
    <a href="/">
        <img src="img/logo.png" class="h-24" />
    </a>
    <ul class="text-white font-semibold flex gap-4 tracking-wide">
        <li><a href="/menu"
                class="{{ Illuminate\Support\Facades\Route::current()->uri == 'menu' ? 'text-orange-400' : '' }} hover:text-orange-400">Menu</a>
        </li>
        <li><a href="/contact"
                class="{{ Illuminate\Support\Facades\Route::current()->uri == 'contact' ? 'text-orange-400' : '' }} hover:text-orange-400">Contact</a>
        </li>
    </ul>
</nav>
