<?php

bpBase::loadSysClass('model', '', 0);
class cashier_merchants_model extends model
{
	public function __construct()
	{
		$this->table_name = 'cashier_merchants';
		parent::__construct();
	}
}


?>