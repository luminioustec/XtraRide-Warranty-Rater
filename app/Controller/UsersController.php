<?php
// app/Controller/UsersController.php
App::uses('AppController', 'Controller');

class UsersController extends AppController {
	public $uses=array('User');
	public $components = array('RequestHandler','Paginator');
	public $helpers  = array('Html', 'Form', 'Session');
    public function beforeFilter() {
        parent::beforeFilter();
         $this->Auth->allow('add','logout','index','login','get_quote');
		 $username= $this->Auth->user('username'); 
			$this->set('username',$username);
			$roles= $this->Auth->user('role'); 
			$this->set('roles',$roles);
			$uid= $this->Auth->user('id'); 
			$this->set('uid',$uid);
    }
	
	public function  isAuthorized($user){
		if( $user['role'] =='admin'){
			return true;
		} else{
			if(in_array($this->action, array('add','index'))){
				return true;
			}
		} 
		return false;
	}
    public function index() {
		$this->layout='frontend';
        
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->findById($id));
    }

    public function add() {
		$this->layout='frontend';
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'login'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        } else {
            $this->request->data = $this->User->findById($id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        // Prior to 2.5 use
        // $this->request->onlyAllow('post');

        $this->request->allowMethod('post');

        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Flash->success(__('User deleted'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Flash->error(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }
	
	public function login() {
		$this->layout = 'frontend';
		if ($this->request->is('post')) {
	        if ($this->Auth->login()) { 
	        	 $this->Flash->success(__('Welcome '.$this->Auth->user('username')));
				$url  =  $this->Auth->redirect(); //echo $this->Auth->user('roles');
	            if(!empty($_GET['referer'])){
					$url  =  SITE_URL. urldecode( $_GET['referer'] ) ;
				} else if($this->Auth->user('role')=='admin'){  
					$url  =  array('controller'=> 'admins', 'action'=> 'index');
				} else if($this->Auth->user('role')!='admin'){
					$url  =  $this->request->referer;
				}
				if(empty($url)){
					$url = SITE_URL;
				}	 
				return $this->redirect($url);
	        } else{
				$this->Flash->error(__('Invalid Credentials supplied'));
			}
			
			//print_r($this->request->data['User']); print_r($this->User); die;
			 $this->Flash->error(__('Invalid username or password, try again'));
	    }
	}

	public function logout() {
		return $this->redirect($this->Auth->logout());
	}
	
	public function get_quote() {
		$this->layout='frontend';
	}
	
	public function place_order(){
		

		
	}
	public function order_status(){
	
	}
	 
	
}