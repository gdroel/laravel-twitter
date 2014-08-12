<h1>Tweets</h1>
@if(Auth::check())
u r logged in as {{ Auth::user()->name }}
@endif
<h2><a href="{{ action('PostsController@showCreate') }}">Create</a></h2>
@foreach($users as $user)

<h3><a href="{{ action('UsersController@follow', $user->id) }}">{{ $user->name }}</a></h3>

@endforeach

<h1>News Feed</h1>
@foreach($newsFeed as $post)

<p>{{ $post->body }}</p>

@endforeach
