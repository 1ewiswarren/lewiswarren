<!DOCTYPE html>
<html class="bg-background overflow-x-hidden" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <title>Lewis Warren - Product Designer and Frontend Developer</title>
    <meta name="description" content="The portfolio of Product Designer and Frontend Developer, Lewis Warren.">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:url" content="https://lewiswarren.co.uk">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Lewis Warren - Product Designer & Frontend Developer Portfolio">
    <meta property="og:description" content="The portfolio of Product Designer and Frontend Developer, Lewis Warren">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
    <body>

        <!-- nav -->
        <nav class="w-full h-88 flex">
            <div class="w-full max-w-[160rem] flex items-center m-auto px-16 justify-between">
                <!-- avatar -->
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/avatar.webp') }}" class="w-48 h-48 sahdow-default" alt="avatar"/>
                <div class="flex gap-12">
                    <!-- button -->
                    <div class="h-48 p-1 border border-white/12 w-max items-center rounded-full">
                        <a href="https://www.notion.so/Lewis-Warren-e1d45d2cedc940269a57283ee9fccbb5" target="_blank" class="text-14 text-white/80 font-light bg-white/2 rounded-full h-full px-16 inline-flex items-center shadow-2xl hover:bg-white/4 hover:shadow-purple-500/40">
                        <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/svg/icon-file.svg') }}" class="mr-12" alt="icon"/>
                            Resume
                        </a>
                    </div>
                    <!-- button -->
                    <div class="h-48 p-1 bg-gradient-to-b from-white/20 to-white/8 w-max items-center rounded-full shadow-default">
                        <a href="https://form.typeform.com/to/fObUcyQl" class="text-14 text-white/90 font-light rounded-full h-full bg-[#25222A] px-16 inline-flex items-center shadow-2xl hover:bg-[#2D2934] hover:shadow-blue/40 transition">
                        <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/svg/icon-message.svg') }}" class="mr-12" alt="icon"/>
                            Get In Touch
                        </a>
                    </div>
                </div>
            </div>
        </nav>


        <!-- header -->
        <header class="w-full max-w-fixed m-auto mt-80 flex flex-col items-center gap-24 px-16 xl:px-0">
            <!-- label -->
            <div class="h-40 p-1 bg-gradient-to-b from-blue/40 to-blue/25 w-max items-center rounded-md">
                <div class="bg-[#0F243D] px-12 flex items-center rounded-md h-full">
                    <h2 class="text-16 text-blue font-regular">Product Design & Frontend Development</h2>
                </div>
            </div>
            <!-- heading -->
            <h1 class="text-40 sm:text-56 font-medium text-transparent bg-clip-text bg-gradient-white-1 text-center">Design. Build. Sleep.</h1>
        </header>


        <!-- likes -->
        <section id="likes" class="w-full max-w-fixed m-auto flex flex-col items-center gap-56 my-120 md:my-200 px-16 xl:px-0">
            <h2 class="text-24 sm:text-32 font-medium text-transparent bg-clip-text bg-gradient-white-3 tracking-[0.025rem]">Some things I like...</h2>

            <div class="w-full max-w-fixed flex flex-wrap items-center justify-center gap-16">

                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">Figma</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">House Plants</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">West Ham United</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">Pixel Art</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">The Sopranos</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">Frontend Dev</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">Nutella</div>
                </div>

                <!-- tag -->
                    <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">Game Dev</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">Hans Zimmer Soundtracks</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">Good Coffee</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">TailwindCSS</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">Back To The Future</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">Hiking</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">Icons</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">Pasta</div>
                </div>

                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">Animals</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">Furniture</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">The Office</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">Wild Swimming</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">Pink Floyd</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">Boxing</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">Interstellar</div>
                </div>
                <!-- tag -->
                <div class="h-48 md:h-56 p-1 bg-gradient-to-b from-white/12 to-white/4 w-max items-center rounded-xl shadow-default">
                    <div class="text-16 md:text-18 font-regular text-white/70 h-full bg-[#1B1821] rounded-xl px-16 inline-flex items-center">Chocolate Bar Milkshakes</div>
                </div>

            </div>
        </section>


        <!-- projects -->
        <section id="projects" class="w-full max-w-fixed m-auto flex flex-col items-center gap-56 my-120 md:my-200 px-16 xl:px-0">
            <h2 class="text-24 sm:text-32 font-medium text-transparent bg-clip-text bg-gradient-to-r from-white/60 to-white/20 tracking-[0.025rem] mr-auto">I’ve recently been working on...</h2>
            <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-64 md:gap-40 lg:gap-64 items-center justify-between">
                <!-- project -->
                <a href="https://spinupwp.com" target="_blank" class="w-full gap-24 flex flex-col">
                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/project-spinupwp.webp') }}" class="w-full shadow-default rounded-xl border border-white/4" alt="SpinupWP Project"/>
                    <div class="flex flex-col gap-16">
                        <div class="w-full flex items-center justify-between">
                            <h3 class="text-18">SpinupWP</h3>
                            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/svg/icon-external.svg') }}" alt="icon"/>
                        </div>
                        <p class="text-14 font-body tracking-normal leading-10 text-paragraph/50">SpinupWP is a modern cloud server control panel designed to manage WordPress sites. I designed and built the new brand and marketing site using TailwindCSS.</p> 
                    </div>              
                </a>
                 <!-- project -->
                <a href="https://deploymenthawk.com" target="_blank" class="w-full gap-24 flex flex-col">
                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/project-deploymenthawk.webp') }}" class="w-full shadow-default rounded-xl border border-white/4" alt="DeploymentHawk Project"/>
                    <div class="flex flex-col gap-16">
                        <div class="w-full flex items-center justify-between">
                            <h3 class="text-18">DeploymentHawk</h3>
                            <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/svg/icon-external.svg') }}" alt="icon"/>
                        </div>
                        <p class="text-14 font-body tracking-normal leading-10 text-paragraph/50">The all-in-one site deployment monitoring tool. Receive a Lighthouse report each time you deploy code to your site, gaining valuable insights to boost speed & performance.</p> 
                    </div>              
                </a>
                 <!-- project -->
                <div class="w-full gap-24 flex flex-col">
                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/project-game.webp') }}" class="w-full shadow-default rounded-xl border border-white/4" alt="Game Project"/>
                    <div class="flex flex-col gap-16">
                        <div class="w-full flex items-center justify-between">
                            <h3 class="text-18">Missing (WIP Title)</h3>
                        </div>
                        <p class="text-14 font-body tracking-normal leading-10 text-paragraph/50">A pixel art action-adventure game designed in Aseprite and built in Godot.</p> 
                    </div>              
                </div>
                 <!-- project -->
                <div class="w-full gap-24 flex flex-col h-full">
                    <div class="w-full h-full rounded-xl border border-dashed border-white/16 min-h-[16rem]"></div>
                    <div class="flex flex-col gap-16">
                        <div class="w-full flex items-center justify-between">
                            <h3 class="text-18">Coming Soon!</h3>
                        </div>
                        <p class="text-14 font-body tracking-normal leading-10 text-paragraph/50">Nothing to see here, but I needed a grid of 4. Real Designer problems...</p> 
                    </div>              
                </div>
            </div>
        </section>


        <!-- apps -->
        <section id="apps" class="w-full max-w-fixed m-auto flex flex-col items-center gap-56 my-120 md:my-200 px-16 xl:px-0">
            <h2 class="text-24 sm:text-32 font-medium text-transparent bg-clip-text bg-gradient-white-3 tracking-[0.025rem]">Apps I cannot live without...</h2>
            <div class="h-48 relative p-1 inset w-max rounded-[2rem] h-max bg-gradient-to-b from-white/12 to-white/0">
                <div class="w-max p-24 grid grid-cols-4 md:grid-cols-8 items-center gap-32 bg-gradient-to-b from-[#211F27] to-background rounded-[2rem]">
                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/appicon-figma.webp') }}" class="w-56 h-56 relative hover:-translate-y-16 transition-transform ease-in shadow-lg" title="Figma" alt="Figma App Icon"/>
                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/appicon-vscode.webp') }}" class="w-56 h-56 relative hover:-translate-y-16 transition-transform ease-in shadow-lg" title="VSCode" alt="VSCode App Icon"/>
                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/appicon-aseprite.webp') }}" class="w-56 h-56 relative hover:-translate-y-16 transition-transform ease-in shadow-lg" title="Aseprite" alt="Aseprite App Icon"/>
                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/appicon-1password.webp') }}" class="w-56 h-56 relative hover:-translate-y-16 transition-transform ease-in shadow-lg" title="1Password" alt="1Password App Icon"/>
                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/appicon-github.webp') }}" class="w-56 h-56 relative hover:-translate-y-16 transition-transform ease-in shadow-lg" title="GitHub Desktop" alt="GitHub Desktop App Icon"/>
                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/appicon-plex.webp') }}" class="w-56 h-56 relative hover:-translate-y-16 transition-transform ease-in shadow-lg" title="Plex" alt="Plex Media Server App Icon"/>
                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/appicon-cleanShot.webp') }}" class="w-56 h-56 relative hover:-translate-y-16 transition-transform ease-in shadow-lg" title="CleanShot" alt="CleanShot App Icon"/>
                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/appicon-typora.webp') }}" class="w-56 h-56 relative hover:-translate-y-16 transition-transform ease-in shadow-lg" title="Typora" alt="Typora App Icon"/>
                </div>
            </div>
        </section>


        <!-- games -->
        <section id="games" class="w-full max-w-fixed m-auto flex flex-col items-center gap-56 my-120 md:my-200 px-16 xl:px-0">
            <h2 class="text-24 sm:text-32 font-medium text-transparent bg-clip-text bg-gradient-to-r from-white/60 to-white/20 tracking-[0.025rem] mr-auto">Lately, I've enjoyed playing...</h2>
            <div class="w-full grid grid-cols-2 md:grid-cols-4 gap-24 sm:gap-40 items-center justify-between">
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/game-hollowknight.webp') }}" class="w-full shadow-default rounded-xl border border-white/4" title="Hollow Knight" alt="Hollow Knight Cover Art"/>
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/game-godofwar2.webp') }}" class="w-full shadow-default rounded-xl border border-white/4" title="God of War: Ragnorak" alt="God of War: Ragnorak Cover Art"/>
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/game-reddead2.webp') }}" class="w-full shadow-default rounded-xl border border-white/4" title="Red Dead Redemption 2" alt="Red Dead Redemption 2 Cover Art"/>
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/game-lastofus.webp') }}" class="w-full shadow-default rounded-xl border border-white/4" title="The Last of Us" alt="The Last of Us Cover Art"/>
            </div>
        </section>


        <!-- albums -->
        <section id="albums" class="w-full max-w-fixed m-auto flex flex-col items-center gap-56 my-120 md:my-200 px-16 xl:px-0">
            <h2 class="text-24 sm:text-32 font-medium text-transparent bg-clip-text bg-gradient-to-r from-white/60 to-white/20 tracking-[0.025rem] mr-auto">You’ll often find me listening too...</h2>
            <div class="w-full grid grid-cols-3 md:grid-cols-6 items-center gap-24 sm:gap-40 md:gap-24 lg:gap-40">
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/album-madeon.webp') }}" class="w-full shadow-default rounded-xl border border-white/4" title="Madeon - Adventure Album" alt="Madeon Album Artwork"/>
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/album-daftpunk.webp') }}" class="w-full shadow-default rounded-xl border border-white/4" title="Daft Punk - Alive Album" alt="Daft Punk - Alive Album Artwork"/>
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/album-foofighters.webp') }}" class="w-full shadow-default rounded-xl border border-white/4" title="Foo Fighters - The Colour and the Shape Album" alt="Foo Fighters - The Colour and the Shape Album Artwork"/>
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/album-pinkfloyd.webp') }}" class="w-full shadow-default rounded-xl border border-white/4" title="Pink Floyd - Dark Side of the Moon Album" alt="Pink Floyd - Dark Side of the Moon Album Artwork"/>
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/album-fosterthepeople.webp') }}" class="w-full shadow-default rounded-xl border border-white/4" title="Foster the People - Torches Album" alt="Foster the People - Torches Album Artwork"/>
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/album-deadmau5.webp') }}" class="w-full shadow-default rounded-xl border border-white/4" title="Deadmau5 - Random Album Title" alt="Deadmau5 - Random Album Title Artwork"/>
            </div>
        </section>


        <!-- cta -->
        <section class="w-full max-w-fixed m-auto flex flex-col items-center gap-40 my-40 px-16 xl:px-0">
            <!-- label -->
            <div class="h-40 p-1 bg-gradient-to-b from-blue/40 to-blue/25 w-max items-center rounded-md">
                <div class="bg-[#0F243D] px-12 flex items-center rounded-md h-full">
                    <h2 class="text-16 text-blue font-regular">Want to Work Together?</h2>
                </div>
            </div>
            <!-- heading -->
            <h1 class="text-32 sm:text-56 font-medium max-w-560 text-transparent bg-clip-text bg-gradient-white-1 text-center leading-normal sm:leading-tight">I’m only one press of a button away...</h1>
            <!-- button -->
            <div class="h-56 p-1 bg-gradient-to-b from-white/20 to-white/8 w-max items-center rounded-full shadow-default">
                <a href="https://form.typeform.com/to/fObUcyQl" class="text-18 text-white/90 font-regular rounded-full h-full bg-[#25222A] rounded-full px-24 inline-flex items-center shadow-2xl hover:bg-[#2D2934] hover:shadow-blue/40 transition">
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/svg/icon-message.svg') }}" class="mr-12" alt="icon"/>
                    Get In Touch
                </a>
            </div>
        </section>


        <!-- footer -->
        <footer class="w-full max-w-fixed m-auto flex flex-col items-center pt-80 sm:pt-160 group relative overflow-hidden px-16 xl:px-0">
            <div class="w-max relative flex items-baseline gap-48">
                <p class="hidden md:block text-24 text-paragraph/50 w-[18rem] text-center absolute right-440 rotate-[-9deg] font-script">My cats are always spying...</p>
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/cat-molly.webp') }}" class="h-96 sm:h-[12.4rem] relative group-hover:translate-y-160 transition duration-300 ease-in-out" alt="cat"/>
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/webp/cat-bourbon.webp') }}" class="h-96 sm:h-[12.4rem] relative group-hover:translate-y-160 transition duration-700 ease-in-out" alt="cat"/>
            </div>
        </footer>
        

    </body>
</html>
