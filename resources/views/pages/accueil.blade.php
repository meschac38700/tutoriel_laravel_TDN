@extends('../layouts/master',['page'=>'Accueil'])

	@section('title', 'Accueil')

	@section('content')
		<p>{{ $last_name . $first_name }} </p>
		@include('shared._Weekend')
	@stop

	@section('footer')
		TDN &copy; 2018 
	@stop