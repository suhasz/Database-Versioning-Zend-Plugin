<?php

/**
 * @param string $pluginDir Plugin file Directory Location
 * @param string $pluginFile Plugin file Name
 */
$pluginDir = $this->_database['appPath'];
$pluginFile = $this->_database['key'] . ".php";
require_once($pluginDir . $pluginFile);

/*
 * A sample DB Build class to demonstrate how do we define several methods that affect the DB for the current build
 * This class is then read by the SystemController which then executes the entire build
 */

class build1 extends DbVer_DvInfo
{

	public function __construct($db)
	{
		parent::__construct($db);

		//Every build should have it's unique number
		$this->build_id = 1;

		/*
		 * all the methods involved in this current build are listed here
		 * these methodss will then define their own DB change logic
		 */

		$this->build_list[] = "testdemo1";
		$this->build_list[] = "testdemo1_1";
		$this->build_list[] = "testdemo1_2";
		$this->build_list[] = "testdemo1_3";
	}

	/**
	 * This method is to execute the database query	
	 * @author Manasi
	 */
	function testdemo1()
	{
		$sql = "
		CREATE TABLE testdemo1
		(
		`id` int(10) NOT NULL AUTO_INCREMENT,
		`test_name`  VARCHAR(255) DEFAULT '',
		`is_deleted` TINYINT(1) DEFAULT 0,
		`created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		`created_by` INT(11) NOT NULL,
		`modified` TIMESTAMP NULL DEFAULT NULL,
		`modified_by` INT(11) NOT NULL,
                PRIMARY KEY (`id`)
		)
		COMMENT='testdemo1 table';";

		return $this->runSQL($sql);
	}

	/**
	 * This method is to execute the database query
	 * @author Manasi
	 */
	protected function testdemo1_1()
	{
		$sql = "
		CREATE TABLE testdemo1_1
		(
		`id` int(10) NOT NULL AUTO_INCREMENT,
		`test_name`  VARCHAR(255) DEFAULT '',
		`is_deleted` TINYINT(1) DEFAULT 0,
		`created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		`created_by` INT(11) NOT NULL,
		`modified` TIMESTAMP NULL DEFAULT NULL,
		`modified_by` INT(11) NOT NULL,
                PRIMARY KEY (`id`)
		)
		COMMENT='testdemo1_1 table';";

		return $this->runSQL($sql);
	}

	/**
	 * This method is to execute the database query
	 * @author Manasi
	 */
	protected function testdemo1_2()
	{
		$sql = "
		CREATE TABLE testdemo1_2
		(
		`id` int(10) NOT NULL AUTO_INCREMENT,
		`test_name`  VARCHAR(255) DEFAULT '',
		`is_deleted` TINYINT(1) DEFAULT 0,
		`created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		`created_by` INT(11) NOT NULL,
		`modified` TIMESTAMP NULL DEFAULT NULL,
		`modified_by` INT(11) NOT NULL,
                PRIMARY KEY (`id`)
		)
		COMMENT='testdemo1_2 table';";

		return $this->runSQL($sql);
	}

	/**
	 * This method is to execute the database query
	 * @author Manasi
	 */
	protected function testdemo1_3()
	{
		$sql = "
		CREATE TABLE testdemo1_3
		(
		`id` int(10) NOT NULL AUTO_INCREMENT,
		`test_name`  VARCHAR(255) DEFAULT '',
		`is_deleted` TINYINT(1) DEFAULT 0,
		`created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
		`created_by` INT(11) NOT NULL,
		`modified` TIMESTAMP NULL DEFAULT NULL,
		`modified_by` INT(11) NOT NULL,
                PRIMARY KEY (`id`)
		)
		COMMENT='testdemo1_3 table';";

		return $this->runSQL($sql);
	}

}
?>
