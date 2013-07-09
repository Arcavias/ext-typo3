<?php

/**
 * @copyright Copyright (c) Metaways Infosystems GmbH, 2013
 * @license LGPLv3, http://www.arcavias.com/en/license
 */


/**
 * Creates all required tables.
 */
class MW_Setup_Task_TablesCreateTypo3 extends MW_Setup_Task_TablesCreateMShop
{
	/**
	 * Executes the task for MySQL databases.
	 */
	protected function _mysql()
	{
		$this->_msg( 'Creating Arcavias TYPO3 tables', 0 );
		$this->_status( '' );

		$ds = DIRECTORY_SEPARATOR;

		$files = array(
			dirname(realpath(__FILE__)) . $ds . 'default' . $ds . 'schema' . $ds . 'mysql' . $ds . 'customer.sql',
		);

		$this->_setup( $files );
	}
}
