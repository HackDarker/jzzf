<?php

bpBase::loadSysClass('model', '', 0);
class wxcoupon_receive_model extends model
{
	public function __construct()
	{
		$this->table_name = 'wxcoupon_receive';
		parent::__construct();
	}
}


?>