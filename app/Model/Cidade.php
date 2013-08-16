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
class Cidade extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * HasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Address' => array(
			'className' => 'Address',
			'foreignKey' => 'cidades_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)		
	);

}