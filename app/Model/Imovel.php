<?php
App::uses('AppModel', 'Model');
/**
 * Imovel Model
 *
 * @property User $User
 * @property Tipo $Tipo
 * @property Categoria $Categoria
 * @property Contrato $Contrato
 * @property Comentario $Comentario
 * @property Dado $Dado
 * @property Destaque $Destaque
 * @property Detalhe $Detalhe
 * @property Foto $Foto
 * @property ImovelProprietario $ImovelProprietario
 * @property Lazer $Lazer
 * @property Log $Log
 * @property Observation $Observation
 * @property Placa $Placa
 * @property Valore $Valore
 */
class Imovel extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tipo' => array(
			'className' => 'Tipo',
			'foreignKey' => 'tipo_id'
		),
		'Categoria' => array(
			'className' => 'Categoria',
			'foreignKey' => 'categoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Contrato' => array(
			'className' => 'Contrato',
			'foreignKey' => 'contrato_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Comentario' => array(
			'className' => 'Comentario',
			'foreignKey' => 'imovel_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Observation' => array(
			'className' => 'Observation',
			'foreignKey' => 'imovel_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
}