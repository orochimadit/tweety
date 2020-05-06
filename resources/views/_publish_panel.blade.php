<div class="border border-blue-400 rounded-lg px-8 py-6">
            <form method="POST" action="/tweets" >
                @csrf
                <textarea name="body" id="" 
                class="w-full"
                placeholder="whats up dude"
           
                >
                
                </textarea>
                <hr class="my-4">
                <footer class="flex justify-between">
                <img src="{{auth()->user()->avatar}}" 
                    class="rounded-full mr-2"
                    alt="Your avatar">
                <button type="submit" 
                class="bg-blue-500 rounded-lg shadow py-4 px-2 text-white">
                Tweet a roo!</button>
                </footer>
            </form>
            @error('body')
            <p class="text-red-500 text-sm">{{$message}}</p>
            @enderror
</div>
