<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>

    <style>
        html {
            scroll-behavior: smooth;
        }

        ::selection {
        color: white;
        background: rgb(0 0 255);
        }
        
    </style>

    <nav class="flex justify-between px-[1.5rem] py-[1rem] md:px-[3.5rem] md:py-[2rem] z-0">
        <h1 id="mega" class="text-4xl font-bold"><a href="/">MEGA</a></h1>
        <div>
            <ul class="hidden md:flex">
                <li class="mr-[1rem] font-bold hover:text-blue-700 duration-250"><a class="duration-200 hover:border-t-4" href="/cate/auto">Auto</a></li>
                <li class="mr-[1rem] font-bold hover:text-blue-700 duration-250"><a class="duration-200 hover:border-t-4" href="/cate/mobile">Mobile</a></li>
                <li class="mr-[1rem] font-bold hover:text-blue-700 duration-250"><a class="duration-200 hover:border-t-4" href="/cate/tech">Tech</a></li>
                <li class="font-bold hover:text-blue-700 duration-250"><a class="duration-200 hover:border-t-4" href="/cate/tips">Tips</a></li>
            </ul>   
            <!-- hamburder icon -->
            <div id="ham" class="ham w-[30px] h-[25px] flex flex-col justify-between md:hidden" >
                <div class="w-full h-[5px] bg-black"></div>
                <div class="w-full h-[5px] bg-black"></div>
                <div class="w-full h-[5px] bg-black"></div>
            </div>
            <!-- cross icon -->
            <div id="cross" class="cross mt-5 ham w-[30px] h-[25px] flex flex-col justify-between md:hidden relative hidden" >
                <div class="w-full h-[5px] bg-black rotate-45"></div>
                <div class="w-full h-[5px] bg-black rotate-[-45deg] absolute top-0"></div>
            </div>
        </div>
    </nav>

    <!-- mobile menu -->
    <div id="menu" class="bg-white absolute top-0 h-screen z-[999] w-full sticky hidden">
        <div id="free" class="flex justify-center h-screen">
            <ul class="flex flex-col justify-center text-center">
                <a href="/cate/auto" class="text-black text-4xl mb-[2rem] hover:underline duration-200">AUTO</a>
                <a href="/cate/mobile" class="text-black text-4xl mb-[2rem] hover:underline">MOBILE</a>
                <a href="/cate/tech" class="text-black text-4xl mb-[2rem] hover:underline">TECH</a>
                <a href="/cate/tips" class="text-black text-4xl hover:underline">TIPS</a>
            </ul>
        </div>
    </div>

    <section class="px-[1.5rem] py-[1rem] md:px-[3.5rem] md:py-[2rem]">
        @yield('content')
    </section>

    <section class="md:flex px-[1.5rem] py-[1rem] md:px-[3.5rem] md:py-[2rem] w-[100%] bg-[url('/assets/liquid.jpg')]">
        <div class="md:w-[40%] text-4xl font-bold mb-[1rem] md:mb-0">
            Get In Touch
        </div>
        <div class="md:w-[60%]">
            <form action="/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col mb-[1rem]">
                    <label class="mb-[.5rem]">Email address</label>
                    <input name="email" placeholder="example@email.com" class="focus:outline-0 focus:border-2 focus:border-black p-[1rem] border-2" type="email"></input>
                </div>
                <div class="flex flex-col">
                    <label class="mb-[.5rem]">Message</label>
                    <input name="message" placeholder="Hello..." class="focus:outline-0 focus:border-2 focus:border-black p-[1rem] border-2" type="text"></input>
                </div>
                <button type="submit"></button>
            </form>
        </div>
    </section>

    <footer class="md:flex md:justify-between px-[1.5rem] py-[1rem] md:px-[3.5rem] md:py-[2rem]">
        <h1 class="text-4xl font-bold mb-[1rem] md:mb-0">MEGA</h1>
        <div class="md:flex">
            <div class="flex flex-col mr-[4rem]">
                <a href="#" class="mb-[1rem]">HOME</a>
                <a href="#" class="mb-[1rem]">HOME</a>
                <a href="#">HOME</a>
            </div>
            <div class="flex flex-col">
                <a href="#" class="mb-[1rem]">SOCIAL</a>
                <a href="#" class="mb-[1rem]">SOCIAL</a>
                <a href="#">SOCIAL</a>
            </div>
        </div>
    </footer>

    <script>
        let ham = document.getElementById("ham");
        let cross = document.getElementById("cross");
        let free = document.getElementById("free");

        ham.addEventListener("click", () => {
            ham.classList.toggle("hidden");
            cross.classList.remove("hidden");
            menu.classList.remove("hidden");
        });

        cross.addEventListener("click", () => {
            cross.classList.toggle("hidden");
            ham.classList.remove("hidden");
            menu.classList.toggle("hidden");
        })

        free.addEventListener("click", ()=> {
            menu.classList.toggle("hidden");
        });

        AOS.init({
            once: true,
        });



    </script>
    
</body>
</html>
