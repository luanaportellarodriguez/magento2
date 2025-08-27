<?php
namespace Luana\Comments\Model;

class Comments extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(Luana\Comments\Model\ResourceModel\Comments::class);
    }
}