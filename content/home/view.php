<?php
namespace content\home;

class view extends \mvc\view
{
	function config()
	{

	}


	/**
	 * [pushState description]
	 * @return [type] [description]
	 */
	function pushState()
	{
		if(\dash\url::module() !== null)
		{
			// $this->data->display['mvc']     = "content/home/layout-xhr.html";
		}
	}
}
?>