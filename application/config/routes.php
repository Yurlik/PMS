<?php

return [
	
	'' => [
		'controller' => 'products',
		'action' => 'showAll',
	],
	
	'products' => [
		'controller' => 'products',
		'action' => 'showAll',
	],
	
	'products/showAll' => [
		'controller' => 'products',
		'action' => 'showAll',
	],
	
	'product/show/([0-9]+)' => [
		'controller' => 'product',
		'action' => 'show',
		'id' => '$1',
	],
	
	'product/show' => [
		'controller' => 'product',
		'action' => 'show',
	],
	
	'product/edit/([0-9]+)' => [
		'controller' => 'product',
		'action' => 'edit',
		'id' => '$1',
	],
	
	'product/edit' => [
		'controller' => 'product',
		'action' => 'edit',
		'id' => '1',
	],
	
	'product/add' => [
		'controller' => 'product',
		'action' => 'add',
	],
	
];