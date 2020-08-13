<?php

namespace App\Models;

use App\Http\Controllers\Event\BookWasCreated;
use App\Http\Controllers\Event\BookWasUpdated;
use App\Http\Controllers\Event\BookWasDeleted;
use App\BaseModel;

class Books extends BaseModel
{
	protected $fillable = ['title', 'isbn'];
	protected $table = 'books';

	public static function boot()
	{
		parent::boot();

		// when book was created
		static::created(function ($book) {
			event(new BookWasCreated($book));
		});

        // when book was updated
        static::updated(function ($book){
            event(new BookWasUpdated($book));
        });

        // when book was deleted
        static::deleted(function ($book) {
            event(new BookWasDeleted($book));
        });
	}
}
