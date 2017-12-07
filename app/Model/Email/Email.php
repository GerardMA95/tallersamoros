<?php

namespace App\Model\Email;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'email';

    /**
     * Get the EmailSend record associated with the user.
     */
    public function emailSend()
    {
        return $this->hasOne('App\Model\Email\EmailSend');
    }
}
