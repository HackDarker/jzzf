<?php

bpBase::loadSysClass('model', '', 0);
class _model extends model
{
	public function __construct()
	{
		$this->table_name = '';
		parent::__construct();
	}
}


?>