<?php
namespace Mageplaza\HelloWorld\Model;
class Ingredient extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'kind_ingredients_ingredient';

    protected $_cacheTag = 'kind_ingredients_ingredient';

    protected $_eventPrefix = 'kind_ingredients_ingredient';

    protected function _construct()
    {
        $this->_init('Kind\Ingredients\Model\ResourceModel\Ingredient');
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