@extends('../layouts/master',['page'=>'Accueil'])

	@section('title', 'Accueil')

	@section('content')
		<p>{{ $last_name . $first_name }} </p>
		@unless( $isWeekend )  {{-- unless = à moins que... --}}
			{{ " va travailler ! " }}
		@else
			{{ " va t'amuser ! " }}
		@endif
	@stop

	@section('footer')
		TDN &copy; 2018 
	@stop