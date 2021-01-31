<?php
namespace M3skalina\TCPDF\Facades;

use Illuminate\Support\Facades\Facade;

class TCPDF extends Facade
{
	protected static function getFacadeAccessor(){return 'tcpdf';}
}