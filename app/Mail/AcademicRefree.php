<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AcademicRefree extends Mailable
{
    use Queueable, SerializesModels;

    public $referee_data;
    public $link;
    public $unique_id;
    public $personal;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($referee_data, $link, $unique_id, $personal)
    {
        $this->referee_data = $referee_data;
        $this->link = $link;
        $this->unique_id = $unique_id;
        $this->personal = $personal;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.academic');
    }
}
