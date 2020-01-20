<?php
namespace Test\Foo\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	protected $_postFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Test\Foo\Model\PostFactory $postFactory
		)
	{
		$this->_pageFactory = $pageFactory;
		$this->_postFactory = $postFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		// echo '<pre>test_foo<br />';
		// $post = $this->_postFactory->create();
		// $collection = $post->getCollection();
		// print_r(count($collection));
		// print_r(get_class_methods($collection));
		// echo 'foreach getData:<br />';
		// foreach($collection as $item){
		// 	echo "<pre>";
		// 	print_r($item->getData());
		// 	echo "</pre>";
		// }
		// echo '<pre>';
		// exit();
		return $this->_pageFactory->create();
	}
}