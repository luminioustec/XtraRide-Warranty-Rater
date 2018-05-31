<?php
// app/Controller/AppController.php
class AppController extends Controller {
    //...

public $components = array(
    'Flash',
    'Auth' => array(
        'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
        'logoutRedirect' => array(
            'controller' => 'users',
            'action' => 'login'
        ),
        'authenticate' => array(
            'Form' => array(
                'passwordHasher' => 'Blowfish'
            )
        ),
        'authorize' => array('Controller') // Added this line
    )
);

public function isAuthorized($user) {
    // Admin can access every action
    if (isset($user['role']) && $user['role'] === 'admin') {
        return true;
    }

    // Default deny
    return false;
}
}
