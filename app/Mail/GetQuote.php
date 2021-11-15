<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GetQuote extends Mailable
{
	use Queueable, SerializesModels;

	public $data;

	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct($data)
	{
		$this->data = $data;
	}

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build()
	{
		return $this->subject($this->data['name'] . ' requested a quote')->markdown('emails.quote')->with([
			'name' => $this->data['name'],
			'email' => $this->data['email'],
			'phone' => $this->data['phone'],
			'message' => $this->data['message']
		]);
	}
}
