<x-app-layout>
    
    {{-- Portada --}}

    <section class="bg-cover" style="background-image: url({{asset('img/home/people.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">CURSO ONLINE EAISY</h1>
                <p class="text-white text-lg mt-2 mb-4">En curso online eaysi encontraras la mejor manera de aprender de acuerdo a tu nivel de bachillerato</p>
                
                @livewire('search')

            </div>
        </div>
    </section>


    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/giraffe-5799818_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Aprende matemáticas</h1>
                </header>

                <p class="text-sm text-gray-600 text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium temporibus dicta doloribus accusamus!</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/elephants-6176590_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Aprende inglés</h1>
                </header>

                <p class="text-sm text-gray-600 text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium temporibus dicta doloribus accusamus!</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/coding-1853305_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Aprende contaduría</h1>
                </header>

                <p class="text-sm text-gray-600 text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium temporibus dicta doloribus accusamus!</p>

            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/giraffe-5799818_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Aprende desarrollo de software</h1>
                </header>

                <p class="text-sm text-gray-600 text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium temporibus dicta doloribus accusamus!</p>

            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-900 py-12">
        <h1 class="text-center text-white text-3xl">
            ¿Cuales son los mejores cursos para ti?
        </h1>
        <p class="text-center text-white mt-3">Dirigete al catálogo de cursos y filtralos por categorias</p>

        <div class="flex justify-center mt-4">
                <a href="{{route('courses.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Catálogo de Cursos
                </a>
        </div>

    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-700">ULTIMOS CURSOS</h1>
        <p class="text-center text-gray-600 text-sm mb-6">Trabaja duro para aprender aún más</p>
   
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($courses as $course)
            <x-course-card :course="$course" />   
            @endforeach
            </div>

        </section>
</x-app-layout>


