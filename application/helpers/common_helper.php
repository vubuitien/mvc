<?php 
	function public_helper($string = '')
	{
		return base_url('public/'.$string);
	}
	function admin_url($string='')
	{
		return base_url('admin/'.$string);
	}
	function user_url($string='')
	{
		return base_url('pages/'.$string);
	}
?>