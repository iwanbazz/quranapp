@include('head')
        <h2 class="hero_title mr-bt">Result of Your Search by topic</h2>
           @foreach($datas as $data)
             <h2 class="hero_title-1" style="font-weight: bold">{{ $data->topic }}</h2>
             @foreach($data->verses as $verse)
                <p class="hero_desc">{{ $verse->verse_name }}</p>
             @endforeach
           @endforeach
        

@include('foot')