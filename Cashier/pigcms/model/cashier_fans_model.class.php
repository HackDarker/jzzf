<?php

bpBase::loadSysClass('model', '', 0);
class cashier_fans_model extends model
{
	public function __construct()
	{
		$this->table_name = TABLE_PREFIX . 'cashier_fans';
		parent::__construct();
	}
}


?>