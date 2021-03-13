@include('head')
      	
        <h2 class="hero_title">Search Qur’an  by topic</h2>
          <form method="get" action="{{ route('searchTopic') }}">
            <center><div class="search__container">
              <input class="search__input" type="text" name="search" placeholder="Search">
            </div></center>
          </form>
       

@include('foot')