<?php
namespace Test\Foo\Block;
class Display extends \Magento\Framework\View\Element\Template
{
	protected $_postFactory;
	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Test\Foo\Model\PostFactory $postFactory
	)
	{
		$this->_postFactory = $postFactory;
		parent::__construct($context);
	}

	public function sayHello()
	{
		return __('Hello Foo Box');
	}

	public function getPostCollection(){
		$post = $this->_postFactory->create();
		return $post->getCollection();
	}
}