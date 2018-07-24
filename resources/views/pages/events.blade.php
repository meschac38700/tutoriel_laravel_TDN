@extends('../layouts.master', ['page'=>'Events'])

@section('title', 'Events')

@section('content')
	@include('shared/_Weekend')
	<table>
		
		@forelse($events as $event) {{-- forelse permet de traiter l'expcetion si le tableau donné est vide ! --}}
		<tr>
			<td> {{ $event }} </td>
 		</tr>
 		@empty
 			{{ " Pas d'evenements ! " }}
		@endforelse
	</table>
@stop

@push('scripts.footer')
	<script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
@endpush