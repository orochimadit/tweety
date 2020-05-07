<x-master>

    <section class="px-8">
        <main class="container mx-auto ">
            <div class="lg:flex lg:justify-center">
                @if(auth()->check())
                    <div class="lg:w-32">
                        @include('_sidebar_links')
                    </div>
                @endif
                <div class="lg:flex-1 lg:mx-10 " style="max-width:700px ">
                    {{$slot}}
                </div>
                @if(auth()->check())
                <div class="lg:w-1/6 bg-blue-100 rounded-lg">
                    @include('_friends_list')
                    </div>
                @endif
                
            </div>
           
        </main>
    </div>
    </section>
</x-master>