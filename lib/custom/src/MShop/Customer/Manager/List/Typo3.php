<?php

/**
 * @copyright Copyright (c) Metaways Infosystems GmbH, 2013
 * @license LGPLv3, http://www.arcavias.com/en/license
 * @package MShop
 * @subpackage Customer
 */


/**
 * TYPO3 implementation of the customer list class.
 *
 * @package MShop
 * @subpackage Customer
 */
class MShop_Customer_Manager_List_Typo3
	extends MShop_Common_Manager_List_Default
	implements MShop_Customer_Manager_List_Interface, MShop_Common_Manager_List_Interface
{
	private $_searchConfig = array(
		'customer.list.id'=> array(
			'code'=>'customer.list.id',
			'internalcode'=>'t3feuli."id"',
			'internaldeps' => array( 'LEFT JOIN "fe_users_list" AS t3feuli ON ( t3feu."uid" = t3feuli."parentid" )' ),
			'label'=>'Customer list ID',
			'type'=> 'integer',
			'internaltype'=> MW_DB_Statement_Abstract::PARAM_INT,
			'public' => false,
		),
		'customer.list.siteid'=> array(
			'code'=>'customer.list.siteid',
			'internalcode'=>'t3feuli."siteid"',
			'label'=>'Customer list site ID',
			'type'=> 'integer',
			'internaltype'=> MW_DB_Statement_Abstract::PARAM_INT,
			'public' => false,
		),
		'customer.list.parentid'=> array(
			'code'=>'customer.list.parentid',
			'internalcode'=>'t3feuli."parentid"',
			'label'=>'Customer list parent ID',
			'type'=> 'integer',
			'internaltype'=> MW_DB_Statement_Abstract::PARAM_INT,
			'public' => false,
		),
		'customer.list.domain'=> array(
			'code'=>'customer.list.domain',
			'internalcode'=>'t3feuli."domain"',
			'label'=>'Customer list domain',
			'type'=> 'string',
			'internaltype'=> MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.list.typeid' => array(
			'code'=>'customer.list.typeid',
			'internalcode'=>'t3feuli."typeid"',
			'label'=>'Customer list type ID',
			'type'=> 'integer',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_INT,
			'public' => false,
		),
		'customer.list.refid'=> array(
			'code'=>'customer.list.refid',
			'internalcode'=>'t3feuli."refid"',
			'label'=>'Customer list reference ID',
			'type'=> 'string',
			'internaltype'=> MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.list.datestart' => array(
			'code'=>'customer.list.datestart',
			'internalcode'=>'t3feuli."start"',
			'label'=>'Customer list start date/time',
			'type'=> 'datetime',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.list.dateend' => array(
			'code'=>'customer.list.dateend',
			'internalcode'=>'t3feuli."end"',
			'label'=>'Customer list end date/time',
			'type'=> 'datetime',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.list.position' => array(
			'code'=>'customer.list.position',
			'internalcode'=>'t3feuli."pos"',
			'label'=>'Customer list position',
			'type'=> 'integer',
			'internaltype' => MW_DB_Statement_Abstract::PARAM_INT,
		),
		'customer.list.ctime'=> array(
			'code'=>'customer.list.ctime',
			'internalcode'=>'t3feuli."ctime"',
			'label'=>'Customer list create date/time',
			'type'=> 'datetime',
			'internaltype'=> MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.list.mtime'=> array(
			'code'=>'customer.list.mtime',
			'internalcode'=>'t3feuli."mtime"',
			'label'=>'Customer list modification date/time',
			'type'=> 'datetime',
			'internaltype'=> MW_DB_Statement_Abstract::PARAM_STR,
		),
		'customer.list.editor'=> array(
			'code'=>'customer.list.editor',
			'internalcode'=>'t3feuli."editor"',
			'label'=>'Customer list editor',
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
		$config = $context->getConfig()->get( 'mshop/customer/manager/list/typo3/item' );

		parent::__construct( $context, $config, $this->_searchConfig );
	}


	/**
	 * Returns a new manager for customer extensions
	 *
	 * @param string $manager Name of the sub manager type in lower case
	 * @param string|null $name Name of the implementation, will be from configuration (or Default) if null
	 * @return mixed Manager for different extensions, e.g stock, tags, locations, etc.
	 */
	public function getSubManager( $manager, $name = null )
	{
		if( $name === null ) {
			$name = 'Typo3';
		}

		return $this->_getSubManager( 'customer', 'list/' . $manager, $name );
	}
}
