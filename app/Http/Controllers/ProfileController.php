<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;


class ProfileController extends Controller
{
    /**
     * Responds to requests to /profile
     */

    public function getProfileIndex(Request $request)
    {

        $user = \App\User::where('id', '=', \Auth::id())->get();

        $creditcards = \App\Creditcard::where('user_id', '=', \Auth::id())->get();

        return view('profile.profile')->with('user', $user)->with('creditcards', $creditcards);


    }#End getProfileIndex()


    public function getProfileEdit(Request $request)
    {


        $user = \App\User::where('id', '=', \Auth::id());
        $user->delete();


        \Session::flash('message', 'Account deleted, thank you.');
        return redirect('/');

    }


    public function postProfileEditCC(Request $request)
    {
		
		$this->validate($request, [
			'new_user_cc' => 'required|numeric|min:1000|max:9999'
		]);

        $creditCard = new \App\Creditcard();

        $creditCard->user_id = \Auth::id();
        $creditCard->user_cc = $request->input('new_user_cc');

        $creditCard->save();


        \Session::flash('message','Your new credit card has been added, thank you.');


        return redirect('/profile');

    }


    public function getProfileDeleteCC($cc)
    {

        //Create query as array with user_id and user_cc to be deleted
        $creditCardDelete = ['user_id' => \Auth::id(), 'user_cc' => $cc];
        $creditCard = \App\Creditcard::where($creditCardDelete)->first();


		// If found  delete it
        if ($creditCard) {

            // delete
            $creditCard->delete();

			\Session::flash('message','Your credit card has been deleted, thank you.');
            return redirect('/profile');

        } else {
            return "Can't delete";
        }


    }


}#End class ProfileController extends BaseController
