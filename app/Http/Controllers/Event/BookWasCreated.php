<?php

namespace App\Http\Controllers\Event;

use App\Events\Event;
use App\Models\Books;
use Illuminate\Queue\SerializesModels;

class BookWasCreated extends Event
{
	use SerializesModels;

	public $book;

	/** create new event instance */
	public function __construct(Books $book)
	{
		$this->book = $book;
	}

	/** get the channel should broadcast on */
	public function broadcastOn()
	{
		return [];
	}
}
