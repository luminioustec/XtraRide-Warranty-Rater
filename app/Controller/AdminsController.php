<?php

App::uses('AppController', 'Controller');


class AdminsController extends AppController {
	public $uses=array('User','Mileage','Plan','Deductible','Month','SellingPrice','Price','VehicleType');
    public function beforeFilter() {
        parent::beforeFilter();
         $this->Auth->allow('');
			$username= $this->Auth->user('username'); 
			$this->set('username',$username);
			$roles= $this->Auth->user('role'); 
			$this->set('roles',$roles);
			$uid= $this->Auth->user('id'); 
			$this->set('uid',$uid);
			$this->layout='backend';
    }
	
	public function  isAuthorized($user){
		if( $user['role'] =='admin'){
			return true;
		} else{
			if(in_array($this->action, array())){
				return true;
			}
		}
		return false;
	}

	public function index(){
	$this->layout='admin';
	}
	
	public function manage_mileage(){
		$this->layout='admin';
		$allmls=$this->Mileage->find('all');
		$this->set('allmls',$allmls);
		if ($this->request->is('post')) {
            $this->Mileage->create();
            if ($this->Mileage->save($this->request->data)) {
                $this->Flash->success(__('Your Mileage has been saved.'));
                return $this->redirect(array('action' => 'manage_mileage'));
            }
            $this->Flash->error(__('Unable to add your Mileage.'));
        }		
	}
	
	public function delete_mileage($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Mileage->delete($id)) {
			$this->Flash->success(
				__('The Mileage with id: %s has been deleted.', h($id))
			);
		} else {
			$this->Flash->error(
				__('The Mileage with id: %s could not be deleted.', h($id))
			);
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function manage_plans(){	
	$this->layout='admin';
	$allplns=$this->Plan->find('all');
	$this->set('allplns',$allplns);
		if ($this->request->is('post')) {
            $this->Plan->create();
            if ($this->Plan->save($this->request->data)) {
                $this->Flash->success(__('Your Plan has been saved.'));
                return $this->redirect(array('action' => 'manage_plans'));
            }
            $this->Flash->error(__('Unable to add your Plan.'));
        }
		
	}
	
	public function delete_plan($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Plan->delete($id)) {
			$this->Flash->success(
				__('The Plan with id: %s has been deleted.', h($id))
			);
		} else {
			$this->Flash->error(
				__('The Plan with id: %s could not be deleted.', h($id))
			);
		}
		return $this->redirect(array('action' => 'manage_plans'));
	}
	
	public function manage_months(){
	$allmnths=$this->Month->find('all');
	$this->set('allmnths',$allmnths);
		if ($this->request->is('post')) {
            $this->Month->create();
            if ($this->Month->save($this->request->data)) {
                $this->Flash->success(__('Your Month has been saved.'));
                return $this->redirect(array('action' => 'manage_months'));
            }
            $this->Flash->error(__('Unable to add your Month.'));
        }
	}

	public function delete_month($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Month->delete($id)) {
			$this->Flash->success(
				__('The Month with id: %s has been deleted.', h($id))
			);
		} else {
			$this->Flash->error(
				__('The Month with id: %s could not be deleted.', h($id))
			);
		}
		return $this->redirect(array('action' => 'manage_months'));
	}

	public function manage_deductibles(){
		$this->layout='admin';
		$deds=$this->Deductible->find('all');
	$this->set('deds',$deds);
		if ($this->request->is('post')) {
            $this->Deductible->create();
            if ($this->Deductible->save($this->request->data)) {
                $this->Flash->success(__('Your Deductible has been saved.'));
                return $this->redirect(array('action' => 'manage_deductibles'));
            }
            $this->Flash->error(__('Unable to add your Deductible.'));
        }
		
	}
	public function delete_deductible($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Deductible->delete($id)) {
			$this->Flash->success(
				__('The Deductible with id: %s has been deleted.', h($id))
			);
		} else {
			$this->Flash->error(
				__('The Deductible with id: %s could not be deleted.', h($id))
			);
		}
		return $this->redirect(array('action' => 'manage_deductibles'));
	}

	public function manage_sp(){
		$this->layout='admin';
		$sp=$this->SellingPrice->find('all');
		$this->set('sp',$sp);
		if ($this->request->is('post')) {
            $this->SellingPrice->create();
            if ($this->SellingPrice->save($this->request->data)) {
                $this->Flash->success(__('Your SellingPrice has been saved.'));
                return $this->redirect(array('action' => 'manage_sp'));
            }
            $this->Flash->error(__('Unable to add your Selling Price.'));
        }		
	}
	
	public function delete_sp($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->SellingPrice->delete($id)) {
			$this->Flash->success(
				__('The SellingPrice with id: %s has been deleted.', h($id))
			);
		} else {
			$this->Flash->error(
				__('The SellingPrice with id: %s could not be deleted.', h($id))
			);
		}
		return $this->redirect(array('action' => 'manage_sp'));
	}
	
	public function engine_type(){
		$this->layout='admin';
		$vtypes=$this->VehicleType->find('all');
		$this->set('vtypes',$vtypes);
	if ($this->request->is('post')) {
            $this->VehicleType->create();
            if ($this->VehicleType->save($this->request->data)) {
                $this->Flash->success(__('Your vehicle type has been saved.'));
                return $this->redirect(array('action' => 'engine_type'));
            }
            $this->Flash->error(__('Unable to add your vehicle type.'));
        }		
	
	}
	
	public function delete_engine_type($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->VehicleType->delete($id)) {
			$this->Flash->success(
				__('The VehicleType with id: %s has been deleted.', h($id))
			);
		} else {
			$this->Flash->error(
				__('The VehicleType with id: %s could not be deleted.', h($id))
			);
		}
		return $this->redirect(array('action' => 'engine_type'));
	}

	public function add_range(){
		$this->layout='admin';
	$plans=$this->Plan->find('list',array('fields'=>array('id','plan_name')));
	$vtype=$this->VehicleType->find('list',array('fields'=>array('id','vehicle_type')));
	$allmonths=$this->Month->find('all',array('fields'=>array('id','month_count')));
	$sp=$this->SellingPrice->find('all',array('fields'=>array('id','from','to')));
	$deds=$this->Deductible->find('list',array('fields'=>array('id','amount')));
	$mileage=$this->Mileage->find('all',array('fields'=>array('id','from','to')));
	$this->set(compact('plans','vtype','sp','allmonths','deds','mileage'));
	if ($this->request->is('post')) { //pr($this->data); die;
            $this->Price->create();
            if ($this->Price->save($this->request->data)) {
                $this->Flash->success(__('Your SellingPrice has been saved.'));
                return $this->redirect(array('action' => 'add_range'));
            }
            $this->Flash->error(__('Unable to add your Selling Price.'));
        }		
		
	}

	public function list_range(){ 
	$this->layout='admin';
	$allprices=$this->Price->find('all'); //pr($allprices);
	$this->set('allprices',$allprices);
	
	}	
	
}	