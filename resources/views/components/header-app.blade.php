<div class="flex justify-between">
    <h1 class="font-black text-2xl dark:text-gray-100">WireUI</h1>

    <div @click="darkMode = !darkMode; localStorage.setItem('darkMode', darkMode)"
         class="flex justify-center items-center rounded-full bg-sky-500 h-[35px] w-[35px] px-2 py-2 text-center text-white cursor-pointer font-medium transition duration-150 ease-in-out hover:bg-sky-600  dark:bg-sky-300 dark:hover:bg-sky-400 overflow-hidden">
        <i class="fa-light text-2xl text-center  transition-all ease-in-out duration-1000"
           :class="darkMode ? 'animate-slide-up fa-brightness text-gray-800 ' : 'animate-slide-down fa-moon'"></i>

    </div>
</div>
