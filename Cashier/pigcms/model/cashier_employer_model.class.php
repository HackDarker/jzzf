<?php

bpBase::loadSysClass('model', '', 0);
class cashier_employer_model extends model
{
	public function __construct()
	{
		$this->table_name = 'cashier_employer';
		parent::__construct();
	}
}


?>