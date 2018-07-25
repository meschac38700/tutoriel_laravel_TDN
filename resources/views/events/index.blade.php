@extends('../layouts/master')
@section('head_title', "Accueil")
@section('title', $events->count()." Events")

@section('content')

		@foreach($events as $event)
			<article>
				<p><strong>{{$event->name}}</strong></p>
				<p>{{$event->description}}</p>
				<p>Lieu: {{$event->location}}</p>
				<p>Prix: {{ App\Helpers\EventsHelper::formatPrice($event) }}</p>
				<p>Date: {{ App\Helpers\EventsHelper::formatDate($event->starts_at)}} </p>
			</article>
			@if( !$loop->last )
				<hr>
			@endif
		@endforeach

@stop