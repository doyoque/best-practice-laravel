<?php

namespace App\Models;

use App\Events\Book\BookWasCreated;
use App\BaseModel;

class Books extends BaseModel
{
	protected $fillable = ['title', 'isbn'];
	protected $table = 'books';

	public static function boot()
	{
		parent::boot();

		//when book was created
		static::created(function ($book) {
			event(new BookWasCreated($book));
		});
	}
}
