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
		'Corretores' => array(
			'className' => 'Corretores',
			'foreignKey' => 'corretor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tipo' => array(
			'className' => 'Tipo',
			'foreignKey' => 'tipos_id'
		),
		'Categoria' => array(
			'className' => 'Categoria',
			'foreignKey' => 'categorias_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Contrato' => array(
			'className' => 'Contrato',
			'foreignKey' => 'contratos_id',
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

}