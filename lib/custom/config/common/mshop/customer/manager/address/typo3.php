<?php

/**
 * @copyright Copyright (c) Metaways Infosystems GmbH, 2013
 * @license LGPLv3, http://www.arcavias.com/en/license
 */

return array(
	'item' => array(
		'delete' => '
			DELETE FROM "fe_users_address"
			WHERE :cond
			AND siteid = ?
		',
		'insert' => '
			INSERT INTO "fe_users_address" ("siteid", "refid", "company","salutation","title",
				"firstname","lastname","address1","address2","address3","postal","city","state",
				"countryid","langid","telephone","email","telefax","website","flag","pos", "mtime", "editor", "ctime" )
			VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
		',
		'update' => '
			UPDATE "fe_users_address"
			SET "siteid"=?, "refid"=?, "company"=?, "salutation"=?, "title"=?, "firstname"=?, "lastname"=?,
				"address1"=?, "address2"=?, "address3"=?, "postal"=?, "city"=?, "state"=?, "countryid"=?,
				"langid"=?, "telephone"=?, "email"=?, "telefax"=?, "website"=?, "flag"=?, "pos"=?,
				"mtime"=?, "editor"=?
			WHERE "id"=?
		',
		'search' => '
			SELECT tfeuad."id", tfeuad."siteid", tfeuad."refid", tfeuad."company", tfeuad."salutation", tfeuad."title",
				tfeuad."firstname", tfeuad."lastname", tfeuad."address1", tfeuad."address2", tfeuad."address3",
				tfeuad."postal", tfeuad."city", tfeuad."state", tfeuad."countryid", tfeuad."langid", tfeuad."telephone",
				tfeuad."email", tfeuad."telefax", tfeuad."website", tfeuad."flag", tfeuad."pos",
				tfeuad."mtime", tfeuad."editor", tfeuad."ctime"
			FROM "fe_users_address" AS tfeuad
			:joins
			WHERE :cond
			/*-orderby*/ ORDER BY :order /*orderby-*/
			LIMIT :size OFFSET :start
		',
		'count' => '
			SELECT COUNT(*) AS "count"
			FROM (
				SELECT DISTINCT tfeuad."id"
				FROM "fe_users_address" AS tfeuad
				:joins
				WHERE :cond
				LIMIT 10000 OFFSET 0
			) AS list
		',
	),
);
