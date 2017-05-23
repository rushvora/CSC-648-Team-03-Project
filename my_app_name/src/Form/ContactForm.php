<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Mailer\MailerAwareTrait;
use Cake\Validation\Validator;

/**
 * Contact Form.
 */
class ContactForm extends Form
{
    use MailerAwareTrait;
    /**
     * Builds the schema for the modelless form
     *
     * @param Schema $schema From schema
     * @return $this
     */
    protected function _buildSchema(Schema $schema)
    {
        $schema->addField('name', ['type' => 'string'])
            ->addField('email', ['type' => 'string']);
        return $schema;
    }

    /**
     * Form validation builder
     *
     * @param Validator $validator to use against the form
     * @return Validator
     */
    protected function _buildValidator(Validator $validator)
    {
        $validator->notEmpty('name')
            ->add('email', 'valid', ['rule' => 'email'])
            ->notEmpty('email');
        return $validator;
    }

    /**
     * Defines what to execute once the From is being processed
     *
     * @return bool
     */
    protected function _execute(array $data)
    {
	$this->getMailer('ContactForm')->send('submission',[$data]);
	return true;
    }
}
