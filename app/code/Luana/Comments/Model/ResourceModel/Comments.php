<?php
namespace Luana\Comments\Model\ResourceModel;

class Comments extends AbstractDb
{
    const MAIN_TABLE = 'luana_comments';
    const ID_FIELD = 'comment_id';

    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD);
    }
}