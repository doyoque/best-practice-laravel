<?php

namespace App\Http\Controllers\Event;

use App\Events\Event;
use App\Models\Books;
use Illuminate\Queue\SerializesModels;

class BookWasUpdated extends Event
{
    use SerializesModels;

    public $book;

    /** Create a new event instance */
    public function __construct(Books $book)
    {
        $this->book = $book;
    }

    /** Get the channels the event should be broadcast on */
    public function broadcastOn()
    {
        return [];
    }
}

