<?php

bpBase::loadSysClass('model', '', 0);
class cashier_wxcoupon_receive_model extends model
{
	public function __construct()
	{
		$this->table_name = 'cashier_wxcoupon_receive';
		parent::__construct();
	}
}


?>