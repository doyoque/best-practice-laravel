<?php

namespace App\Http\Controllers\Contracts;

interface RepositoryInterface
{
	public function getBooks();
	public function find($id);
	public function create($request);
	public function update($request, $id);
	public function delete($id);
}
