<?php
namespace Luana\Comments\Model\ResourceModel\Comments;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            \Luana\Comments\Model\Comments::class,
            \Luana\Comments\Model\ResourceModel\Comments::class
        );
    }
}
