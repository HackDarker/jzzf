<?php

bpBase::loadSysClass('model', '', 0);
class cashier_wxcoupon_common_model extends model
{
	public function __construct()
	{
		$this->table_name = 'cashier_wxcoupon_common';
		parent::__construct();
	}
}


?>