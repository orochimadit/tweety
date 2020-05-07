<x-app>
    explore page
    <div>
        @foreach($users as $user)
        <a href="{{$user->path()}}">
            <img src="{{$user->avatar}}" alt="{{$user->username}}'s Avatar'"
                class="mr-4 rounded"
            width="60">
        </a>
        <div>
            <h4 class="font-bold">{{'@'.$user->username}}</h4>
        </div>

        @endforeach
        {{-- {{$user->links()}} --}}
    </div>
</x-app>