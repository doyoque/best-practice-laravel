<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Books extends Model
{
	protected $table = 'books';

	public static function getAll()
	{
		$books = Books::get();
		return $books;
	}
}
