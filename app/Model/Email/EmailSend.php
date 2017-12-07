<?php

namespace App\Model\Email;

use Illuminate\Database\Eloquent\Model;

class EmailSend extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'email_send';

    /**
     * Get the Email belongs to EmailSend.
     */
    public function email()
    {
        return $this->belongsTo('App\Model\Email\Email');
    }
}
