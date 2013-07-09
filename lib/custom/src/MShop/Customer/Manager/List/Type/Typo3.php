<?php

/**
 * @copyright Copyright (c) Metaways Infosystems GmbH, 2013
 * @license LGPLv3, http://www.arcavias.com/en/license
 * @package MShop
 * @subpackage Customer
 */


/**
 * TYPO3 implementation of the customer list type class.
 *
 * @package MShop
 * @subpackage Customer
 */
class MShop_Customer_Manager_List_Type_Typo3
	extends MShop_Common_Manager_Type_Default
	implements MShop_Customer_Manager_List_Type_Interface
{
	private $_searchConfig = array(
		'customer.list.type.id' => array(
			'code'=>'customer.list.type.id',
			'internalcode'=>'t3feulity."id"',
			'internaldeps'=>array( 'LEFT JOIN "fe_users_list_type" AS t3feulity ON ( t3feuli."typeid" = t3feulity."id" )' ),
			'label'=>'Customer list type ID',
			'type'=> 'integer',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_INT,
			'public' => false,
		),
		'customer.list.type.siteid' => array(
			'code'=>'customer.list.type.siteid',
			'internalcode'=>'t3feulity."siteid"',
			'label'=>'Customer list type site ID',
			'type'=> 'integer',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_INT,
			'public' => false,
		),
		'customer.list.type.code' => array(
			'code'=>'customer.list.type.code',
			'internalcode'=>'t3feulity."code"',
			'label'=>'Customer list type code',
			'type'=> 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.list.type.domain' => array(
			'code'=>'customer.list.type.domain',
			'internalcode'=>'t3feulity."domain"',
			'label'=>'Customer list type domain',
			'type'=> 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.list.type.label' => array(
			'code'=>'customer.list.type.label',
			'internalcode'=>'t3feulity."label"',
			'label'=>'Customer list type label',
			'type'=> 'string',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.list.type.status' => array(
			'code'=>'customer.list.type.status',
			'internalcode'=>'t3feulity."status"',
			'label'=>'Customer list type status',
			'type'=> 'integer',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_INT,
		),
		'customer.list.type.ctime'=> array(
			'code'=>'customer.list.type.ctime',
			'internalcode'=>'t3feulity."ctime"',
			'label'=>'Customer list type create date/time',
			'type'=> 'datetime',
			'internaltype'=> MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.list.type.mtime'=> array(
			'code'=>'customer.list.type.mtime',
			'internalcode'=>'t3feulity."mtime"',
			'label'=>'Customer list type modification date/time',
			'type'=> 'datetime',
			'internaltype'=> MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.list.type.editor'=> array(
			'code'=>'customer.list.type.editor',
			'internalcode'=>'t3feulity."editor"',
			'label'=>'Customer list type editor',
			'type'=> 'string',
			'internaltype'=> MW_DB_Statement_Abstract::PARAM_STR,
		),
	);


	/**
	 * Initializes a new customer address manager object using the given context object.
	 *
	 * @param MShop_Context_Interface $context Context object with required objects
	 */
	public function __construct( MShop_Context_Item_Interface $context )
	{
		$config = $context->getConfig()->get( 'mshop/customer/manager/list/type/typo3/item' );

		parent::__construct( $context, $config, $this->_searchConfig );
	}
}
