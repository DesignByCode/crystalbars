<?php

namespace App\Http\Controllers;

use App\Mail\GetQuote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use LVR\Phone\Phone;

class SendQuoteController extends Controller
{

	public function __invoke(Request $request)
	{

		$request->validate([
			'name' => 'required|string',
			'email' => 'required|string|email',
			'phone' => ['required', new Phone],
			'message' => 'required'
		]);

		Mail::to(env('MAIL_FROM_ADDRESS'))->queue(new GetQuote($data = $request->only('name', 'email', 'phone',
			'message')));

		return back()->withStatus('QUOTE SEND TO THE CRYSTAL BARS TEAM');

	}
}
