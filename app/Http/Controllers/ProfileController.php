<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublisherProfileRequest;
use App\Http\Requests\UserProfileRequest;
use App\Models\Publisher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class ProfileController extends Controller
{
	public function index()
	{
		if (Auth::check()) {
			if (Auth::user()->role == Config::get('role.user')) {
				$user = Auth::user()->user;
				if ($user == null)
					$user = new User();

				return view('profile', compact('user'));
			} else {
				$publisher = Auth::user()->publisher;
				if ($publisher == null)
					$publisher = new Publisher();

				return view('profile', compact('publisher'));
			}
		} else {
			return redirect()->route('login');
		}
	}

	public function updateUser(UserProfileRequest $request)
	{
		$user = User::updateOrCreate(
			['account_id' => Auth::id()],
			$request->all()
		);

		return redirect()->back()->with('message', trans('text.profile.updated'));
	}

	public function updatePublisher(PublisherProfileRequest $request)
	{
		$publisher = Publisher::updateOrCreate(
			['account_id' => Auth::id()],
			$request->all()
		);

		return redirect()->back()->with('message', trans('text.profile.updated'));
    }
}
