<?php

namespace tickets\Http\Requests;

use Illuminate\Foundation\Http\Request;

class LoginRequest extends Request
{
    //
	
	public function authorize()
	{
		return true;
	}
	
	public function rules()
	{
		return [];
	}
}
