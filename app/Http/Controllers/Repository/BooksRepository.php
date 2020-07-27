<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Contracts\RepositoryInterface;
use App\Books;

class BooksRepository implements RepositoryInterface
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

	public function find($id)
	{

	}

	public function create($request)
	{

	}

	public function update($request, $id)
	{

	}

	public function delete($id)
	{
		
	}
}
