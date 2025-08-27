<?php
namespace Luana\Comments\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Comments extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    const MAIN_TABLE = 'luana_comments';
    const ID_FIELD = 'comment_id';

    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD);
    }
}