<?php

bpBase::loadSysClass('model', '', 0);
class cashier_employee_model extends model
{
	public function __construct()
	{
		$this->table_name = 'cashier_employee';
		parent::__construct();
	}
}


?>