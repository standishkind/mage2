<?php
namespace Kind\Ingredients\Model\ResourceModel\Ingredientg;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'ingredient_id';
    protected $_eventPrefix = 'kind_ingredients_ingredient_collection';
    protected $_eventObject = 'ingredient_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Kind\Ingredients\Model\Ingredient', 'Kind\Ingredients\Model\ResourceModel\Ingredient');
    }

}