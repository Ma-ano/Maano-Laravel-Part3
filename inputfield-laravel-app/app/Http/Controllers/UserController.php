<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function addUser(Request $request) {
        // validation
        $request->validate([
            'username' => 'required|min:3|max:15',
            'city'     => 'required|uppercase',
            'email'    => ['required', 'regex:/^.+@.+\..+$/'], // Email must contain @ and a valid domain
            'skill'    => 'required|array|min:1',
            'gender'   => 'required',
            'age'      => 'required|integer|min:18|max:100',
            'usercity' => 'required'
        ], [
            // custom validation message
            'username.required' => 'Username cannot be empty.',
            'username.min'      => 'Username must be at least 3 characters.',
            'username.max'      => 'Username must not exceed 15 characters.',

            'city.required'     => 'City cannot be empty.',
            'city.uppercase'    => 'City must be in uppercase',

            'email.required'    => 'Email cannot be empty.',
            'email.regex'       => 'Please provide a valid email address with "@email.com".',

            'skill.required'    => 'Please select at least one skill.',
            'skill.array'       => 'Invalid skill format.',

            'gender.required'   => 'Please select a gender.',

            'age.required'      => 'Age is required.',
            'age.integer'       => 'Age must be a valid number.',
            'age.min'           => 'Minimum age must be 18.',
            'age.max'           => 'Maximum age must be 100.',

            'usercity.required' => 'Please select a user city.'
        ]);

        echo "Name: $request->username";
        echo '<br>';
        echo "City: $request->city";
        echo '<br>';
        echo "Email: $request->email";
        echo '<br>';
        echo "Skills: " .implode(", ", $request->skill);
        echo '<br>';
        echo "Gender: $request->gender";
        echo '<br>';
        echo "Age: $request->age";
        echo '<br>';
        echo "City: $request->usercity";


    }

}

