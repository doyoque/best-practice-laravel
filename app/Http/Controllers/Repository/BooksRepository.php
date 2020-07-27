<?php

namespace App\Http\Controllers\Repository;

use App\Books;

class BooksRepository
{
	public function __construct(Books $books)
	{
		$this->books = $books;
	}

	public function getBooks()
	{
		$data = $this->books::getAll();
		return $data->toArray();
	}
}
