<?php

bpBase::loadSysClass('model', '', 0);
class cashier_adminuser_model extends model
{
	public function __construct()
	{
		$this->table_name = 'cashier_adminuser';
		parent::__construct();
	}
}


?>