<?php
class User extends AppModel {
 
    var $name = 'User';
 
    // Prevent the input from having an id
    // Username: MUST be alphanumeric
    // Password: We specify a function that returns a bool value
    var $validate = array(
        'id' => array(
                            'rule' => 'blank',
                            'on' => 'create'
                     ),
        'username' => array(
                            'rule' => 'alphanumeric',
                            'message' => 'Please enter a valid username',
                            'required' => true
                        ),
        'password' => array(
                            'rule' => array('confirmPassword', 'password'),
                            'message' => 'Passwords do not match',
                            'required' => 'true'
                        ),
        'confirm_password' => array(
                            'rule' => 'alphanumeric',
                            'required' => 'true'
                        ),
        'email' => array( 'email',
                            array( 'rule' => array('email'),
                                    'message' => 'Please enter a valid email!' )
                        ),
        'group_id' => array( 'numeric' )
    );
 
    function confirmPassword($data)
    {
        // We must manually hash the second piece in the same way the AuthComponent would
        // if they match, return true!
        if ($data['password'] == Security::hash(Configure::read('Security.salt') . $this->data['User']['confirm_password'])) {
            return true;
        }
 
        // hashed passwords did NOT match
        return false;
    }
 
    // Check if the username already exists by doing SELECT COUNT(*) FROM users WHERE username = 'your_username'
    function beforeValidate()
    {
        if( !$this->id )
        {
            if( $this->findCount( array('User.username' => $this->data['User']['username'] ) ) > 0 )
            {
                // If any rows are found, send an error and call it 'username_unique'
                // In our view, we can check for this by doing $form->error('username_unique','Not Unique Username!!!')
                //   As specified in the view code I placed above
                $this->invalidate('username_unique');
                return false;
            }
        }
        return true;
    }
 
    // Associations
    var $belongsTo = 'Group';
}
?>
