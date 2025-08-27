<?php
namespace Luana\Comments\Model;

use Magento\Framework\Model\AbstractModel;

class Comments extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Luana\Comments\Model\ResourceModel\Comments::class);
    }
}