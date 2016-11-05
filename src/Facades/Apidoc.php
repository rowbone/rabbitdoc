<?php
namespace Rowbone\Apidoc;
use Illuminate\Support\Facades\Facade;
class Apidoc extends Facade{
	protected static function getFacadeAccessor(){
		return 'Apidoc';
	}
}