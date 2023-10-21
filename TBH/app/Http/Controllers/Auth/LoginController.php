<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function yourMethod(Request $request)
    {
        // You can access request data using the $request object
        $inputValue = $request->input('input_name');
        
        // You can also validate the request
        $this->validate($request, [
            'input_name' => 'required',
            // Add more validation rules as needed
        ]);

        // Your logic here
    }
}
