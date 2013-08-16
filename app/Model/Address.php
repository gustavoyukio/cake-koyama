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
class Address extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Imovel' => array(
			'className' => 'Imovel',
			'foreignKey' => 'imovel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Bairro' => array(
			'className' => 'Bairro',
			'foreignKey' => 'bairros_id',
			'conditions' => 'Bairro.status = 1',
			'fields' => '',
			'order' => ''			
		),
		'Estado' => array(
			'className' => 'Estado',
			'foreignKey' => 'estados_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''			
		),
		'Cidade' => array(
			'className' => 'Cidade',
			'foreignKey' => 'cidades_id',
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

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(

	);
}