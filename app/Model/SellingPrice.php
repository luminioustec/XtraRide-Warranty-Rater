<?php 
App::uses('AppModel', 'Model');

class SellingPrice extends AppModel {
	public $validate = array(
        'from' => array(
                'rule' => 'isUnique',
                'message' => 'This value of mileage has already been taken.'
        ),
        'to' => array(
            'required' => array(
                'rule' => 'isUnique',
                'message' => 'This value of mileage has already been taken.'
            )
        )
    );
	
}	