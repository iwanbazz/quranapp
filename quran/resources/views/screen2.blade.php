@include('head')
      	
        <center><a href="{{ route('searchScreen') }}" class="click_btn mr-bt">Search Qur’an  by topic</a>
        <h2 class="hero_title mr-bt mr-tp">OR</h2>
        <a href="{{ route('ReadScreen' , '1') }}" class="click_btn mr-bt">Read Qur’an by topics</a></center>
       


@include('foot')