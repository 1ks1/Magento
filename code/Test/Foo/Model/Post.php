<?php
namespace Test\Foo\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'test_foo_post';

	protected $_cacheTag = 'test_foo_post';

	protected $_eventPrefix = 'test_foo_post';

	protected function _construct()
	{
		$this->_init('Test\Foo\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}