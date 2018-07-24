@inject('date', 'App\Utilities\Date')

@unless($date::isWeekend() )
	{!! "<strong>Ce n'est pas le weekend! Va travailler !</strong>"!!}
@else
	{!! "<strong>C'est le weekend ! Va t'amuser !</strong>"!!}

@endunless