<?php

namespace App\Http\Controllers\Request;

use Illuminate\Http\Request;

class StoreBookRequest extends Request
{
	public function authorize()
	{
		return true;
	}
	
	public function rules()
	{
		return [
			'title' => 'required',
			'isbn' => 'required'
		];
	}
}
