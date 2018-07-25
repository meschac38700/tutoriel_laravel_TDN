@extends('../layouts/master')
@section('head_title', "Accueil")
@section('title', $events->count()." Events")

@section('content')

		@foreach($events as $event)
			<article>
				<p><strong>{{$event->name}}</strong></p>
				<p>{{$event->description}}</p>
				<p>Lieu: {{$event->location}}</p>
				<p>Prix: {{$event->price}} Euros</p>
			</article>
			@if( !$loop->last )
				<hr>
			@endif
		@endforeach

@stop