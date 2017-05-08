<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * ContactForm mailer.
 */
class ContactFormMailer extends Mailer
{

    /**
     * Mailer's name.
     *
     * @var string
     */
    static public $name = 'ContactForm';

    public function submission(array $data)
    {
	$email = new Email();
        $email->from('app@domain.com', 'Bookmarks')
            ->to('me@domain.com', 'Me')
            ->template('default', 'default')
            ->viewVars(['data' => $data])
            ->send();
    }
}
