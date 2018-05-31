<?php 
App::uses('AppModel', 'Model');

class Price extends AppModel {
	
	 public $belongsTo = array(
        'Plan' => array(
            'className' => 'Plan',
            'foreignKey' => 'plan_id '
        ),
		'VehicleType' => array(
            'className' => 'VehicleType',
            'foreignKey' => 'vehicle_type_id '
        ),
		'SellingPrice' => array(
            'className' => 'SellingPrice',
            'foreignKey' => 'selling_price_id'
        ),
		'Mileage' => array(
            'className' => 'Mileage',
            'foreignKey' => 'mileage_id'
        ),
		'Deductible' => array(
            'className' => 'Deductible',
            'foreignKey' => 'deductible_id'
        ),
		'Month' => array(
            'className' => 'Month',
            'foreignKey' => 'month_id'
        )
		
	
    );
	
	
}	