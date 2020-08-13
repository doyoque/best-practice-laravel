<?php

namespace App\Http\Controllers\Book\Repository;

use App\Contracts\RepositoryInterface;
use App\Models\Books;
use Illuminate\Http\Request;

class BooksRepository implements RepositoryInterface
{
	public function __construct(Books $books)
	{
		$this->books = $books;
	}

	public function getBooks()
	{
		return Books::all();
	}

    /**
     * Create & store a new book.
     *
     * @param $request
     *
     * @return static
     */
	public function create($request)
	{
		$params = $this->params($request);
		$book = Books::create($params);
		return $book;
	}

	private function params($request)
	{
		return Collect($request)->only('title', 'isbn')->toArray();
	}

	public function find($id)
	{
        return Books::find($id);
	}

	public function update($request, $id)
	{
        $param = $this->params($request);
        $book = Books::find($id);
        $book->title = $param['title'];
        $book->isbn = $param['isbn'];
        $book->save();
	}

	public function delete($id)
	{
        return Books::destroy($id);
	}
}
