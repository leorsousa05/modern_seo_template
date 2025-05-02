<header class="bg-gray-800 text-white">
    <div class="container mx-auto flex justify-between items-center p-4">
        <h1 class="text-xl font-bold">
            <a href="/">Meu Site</a>
        </h1>
        <nav class="hidden md:flex space-x-4">
            <a href="/" class="hover:text-gray-400">Home</a>
            <a href="/sobre" class="hover:text-gray-400">Sobre</a>
            <a href="/servicos" class="hover:text-gray-400">Serviços</a>
            <a href="/contato" class="hover:text-gray-400">Contato</a>
        </nav>
        <div class="md:hidden">
            <button id="menu-toggle" class="focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>
    <div id="mobile-menu" class="md:hidden hidden">
        <nav class="flex flex-col space-y-2 p-4">
            <a href="/" class="hover:text-gray-400">Home</a>
            <a href="/sobre" class="hover:text-gray-400">Sobre</a>
            <a href="/servicos" class="hover:text-gray-400">Serviços</a>
            <a href="/contato" class="hover:text-gray-400">Contato</a>
        </nav>
    </div>
</header>
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

