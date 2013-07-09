--
-- Customer database definition
--
-- Copyright (c) Metaways Infosystems GmbH, 2013
-- License LGPLv3, http://www.arcavias.com/en/license
--


SET SESSION sql_mode='ANSI';



--
-- Table structure for table `fe_users_address`
--
CREATE TABLE "fe_users_address" (
	-- Unique address id
	"id" INTEGER NOT NULL AUTO_INCREMENT,
	-- site id, references mshop_locale_site.id
	"siteid" INTEGER NOT NULL,
	-- reference id for customer
	"refid" INTEGER NOT NULL,
	-- company name
	"company" VARCHAR(100) NOT NULL,
	-- customer/supplier categorization
	"salutation" VARCHAR(8) NOT NULL,
	-- title of the customer/supplier
	"title" VARCHAR(64) NOT NULL,
	-- first name of customer/supplier
	"firstname" VARCHAR(64) NOT NULL,
	-- last name of customer/supplier
	"lastname" VARCHAR(64) NOT NULL,
	-- Depending on country, e.g. house name
	"address1" VARCHAR(255) NOT NULL,
	-- Depending on country, e.g. street
	"address2" VARCHAR(255) NOT NULL,
	-- Depending on country, e.g. county/suburb
	"address3" VARCHAR(255) NOT NULL,
	-- postal code of customer/supplier
	"postal" VARCHAR(16) NOT NULL,
	-- city name of customer/supplier
	"city" VARCHAR(255) NOT NULL,
	-- state name of customer/supplier
	"state" VARCHAR(255) NOT NULL,
	-- language id
	"langid" VARCHAR(5) NULL,
	-- Country id the customer/supplier is living in
	"countryid" CHAR(2) NULL,
	-- Telephone number of the customer/supplier
	"telephone" VARCHAR(32) NOT NULL,
	-- Email of the customer/supplier
	"email" VARCHAR(255) NOT NULL,
	-- Telefax of the customer/supplier
	"telefax" VARCHAR(255) NOT NULL,
	-- Website of the customer/supplier
	"website" VARCHAR(255) NOT NULL,
	-- Generic flag
	"flag" INTEGER NOT NULL,
	-- Position
	"pos" SMALLINT NOT NULL default 0,
	-- Date of last modification of this database entry
	"mtime" DATETIME NOT NULL,
	-- Date of creation of this database entry
	"ctime" DATETIME NOT NULL,
	-- Editor who modified this entry at last
	"editor" VARCHAR(255) NOT NULL,
CONSTRAINT "pk_t3feuad_id"
	PRIMARY KEY ("id"),
CONSTRAINT "fk_t3feuad_siteid"
	FOREIGN KEY ("siteid")
	REFERENCES "mshop_locale_site" ("id")
	ON UPDATE CASCADE
	ON DELETE CASCADE,
CONSTRAINT "fk_t3feuad_langid"
	FOREIGN KEY ("langid")
	REFERENCES "mshop_locale_language" ("id")
	ON UPDATE CASCADE
	ON DELETE CASCADE
) ENGINE=InnoDB CHARACTER SET = utf8;

CREATE INDEX "idx_t3feuad_refid" ON "fe_users_address" ("refid");

CREATE INDEX "idx_t3feuad_sid_ln_fn" ON "mshop_customer_address" ("siteid", "lastname", "firstname");

CREATE INDEX "idx_t3feuad_sid_ad1_ad2" ON "mshop_customer_address" ("siteid", "address1", "address2");

CREATE INDEX "idx_t3feuad_sid_post_ci" ON "mshop_customer_address" ("siteid", "postal", "city");

CREATE INDEX "idx_t3feuad_sid_rid" ON "mshop_customer_address" ("siteid", "refid");

CREATE INDEX "idx_t3feuad_sid_lastname" ON "mshop_customer_address" ("siteid", "lastname");

CREATE INDEX "idx_t3feuad_sid_postal" ON "mshop_customer_address" ("siteid", "postal");

CREATE INDEX "idx_t3feuad_sid_city" ON "mshop_customer_address" ("siteid", "city");

CREATE INDEX "idx_t3feuad_sid_addr1" ON "mshop_customer_address" ("siteid", "address1");

CREATE INDEX "idx_t3feuad_sid_rid" ON "mshop_customer_address" ("siteid", "email");
