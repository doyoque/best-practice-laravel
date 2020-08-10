<?php

namespace App\Http\Controllers\Request;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
