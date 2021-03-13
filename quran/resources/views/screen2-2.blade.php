@include('head')
      	
        <h2 class="hero_title mr-bt">Read Qur’an by topics</h2>
             <h2 class="hero_title-1" style="font-weight: bold">{{ $datas->topic }}</h2>
             @foreach($datas->verses as $verse)
                <p class="hero_desc">{{ $verse->verse_name }}</p>
             @endforeach

         <center><p class="mr-tp hero_desc">
          @if($prev != 0)
          <a href="{{ route('ReadScreen' , $prev) }}" class="btn btn-large hero_to_link">Previous Topic</a> |
          @endif
           <a href="{{ route('screen2') }}" class="btn btn-large hero_to_link">Home</a> 
           @if($next != 0)
           | <a href="{{ route('ReadScreen' , $next) }}" class="btn btn-large hero_to_link">Next Topic</a>
           @endif
         </p> </center>

      

@include('foot')