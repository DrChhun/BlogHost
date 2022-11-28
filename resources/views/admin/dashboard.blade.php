<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>
<body>

    <div class="w-[100%] sticky top-0 flex">
        <div id="side" class="w-[20%] h-screen bg-gray-200 p-8 relative duration-200">
            <h1 class="mb-8">Admin</h1>
            <div class="flex flex-col">
                <a href="/main/overview" class="px-full py-4 bg-gray-300 mb-4 text-center">Overview</a>
                <a href="/main/post" class="px-full py-4 bg-gray-300 mb-4 text-center">Post</a>
                <a href="/main/edit" class="px-full py-4 bg-gray-300 text-center">Edit</a>
            </div>
            <div id="admin" class="h-[50px] w-[50px] bg-black rounded-full absolute right-[-25px] bottom-[50%]"></div>
        </div>


        <div id="content" class="w-4/5 h-screen px-8">
            @yield('content')
        </div>
    </div>

    <script>
    
        let side = document.getElementById("side");
        let admin = document.getElementById("admin");
        let content = document.getElementById("content");

        admin.addEventListener("click", ()=> {
            side.classList.toggle("right-80");
            content.classList.toggle("w-4/5");
        });

    </script>
</body>
</html>