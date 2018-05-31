<?php 
App::uses('AppModel', 'Model');

class Month extends AppModel {

		public $validate = array(
        'month_count' => array(
                'rule' => 'isUnique',
                'message' => 'The count for the month has already been added.'
        )
    );

}