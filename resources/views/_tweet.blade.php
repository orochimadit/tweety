            <div>
                <div class="flex p-4 {{$loop->last  ? '' :'border-b border-b-grey-400'}}">
                    <div class="mr-2 flex-shrink-0">
                        <a href="{{route('profile',$tweet->user)}}">
                    <img src="{{$tweet->user->path()}}" 
                     class="rounded-full mr-2"
                     width="50px"
                     height="50px"
                        alt="">
                        </a>
                    </div>
                      
                    <div>
                        <a href="{{$tweet->user->path()}}">
                    <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>
                </a>
                    <p class="text-sm">
                       {{$tweet->body}}
                    </p>
                </div>
                </div>
               
            </div>
        