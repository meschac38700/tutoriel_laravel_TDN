@extends('../layouts.master', ['page'=>'Events'])

@section('title', 'Events')

@section('content')
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