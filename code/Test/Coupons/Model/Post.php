<?php
namespace Test\Coupons\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'salesrule_coupon';

	protected $_cacheTag = 'salesrule_coupon';

	protected $_eventPrefix = 'salesrule_coupon';

	protected function _construct()
	{
		$this->_init('Test\Coupons\Model\ResourceModel\Post');
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