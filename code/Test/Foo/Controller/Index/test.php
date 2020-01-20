<?php
namespace Test\Foo\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{
	public function execute()
	{
		echo '<b style="color:red">Foo</b>';
	}
}