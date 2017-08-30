<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use DB;

class UserController extends Controller
{
    /**
     * Updates an User's information.
     *
     */
    public function update(Request $request)
    {
    	$validator = Validator::make($request->all(), [
			'name' => 'required',
        ]);

        if ($validator->fails()) {
         	return redirect('update-profile')
	            ->withErrors($validator)
	            ->withInput();
        }

        $userId = Auth::user()->id;
    	$name = $request->input('name');
    	$last_name = $request->input('last_name');
    	$country = $request->input('country');
    	$zip_code = $request->input('zip_code');
    	$address = $request->input('address');
    	$telephone = $request->input('telephone');
    	$profession = $request->input('profession');
    	$self_description = $request->input('self_description');
       	
        if( Auth::user()->social_user ) {
            // FACEBOOK UPDATE
            DB::table('users')
                ->where('id', $userId )
                ->update([
                    'country' => $country,
                    'zip_code' => $zip_code,
                    'address' => $address,
                    'telephone' => $telephone,
                    'profession' => $profession,
                    'self_description' => $self_description
                ]);
        }
        else {
            // NORMAL UPDATE
            DB::table('users')
                ->where('id', $userId )
                ->update([
                    'name' => $name,
                    'last_name' => $last_name,
                    'country' => $country,
                    'zip_code' => $zip_code,
                    'address' => $address,
                    'telephone' => $telephone,
                    'profession' => $profession,
                    'self_description' => $self_description
                ]);
        }
       	

        

        return redirect('profile');

    }
}
