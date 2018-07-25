<?php namespace App\Helpers;

class EventsHelper 
{

	public static function formatPrice( $event )
	{
		if( $event->price == 0)
		{
			return "GRATUIT !";
		}
		else
		{
			return sprintf("%.2f euros", $event->price);			
		}
	} 

	public static function formatDate( $date )
	{
		return $date->format("d/m/Y H:i");
	}
}