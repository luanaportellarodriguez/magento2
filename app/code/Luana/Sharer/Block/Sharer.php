<?php
namespace Luana\Sharer\Block;

use Magento\Framework\View\Element\Template;
use Magento\Store\Model\StoreManagerInterface;

class Sharer extends Template
{
    private StoreManagerInterface $storeManager;

    public function __construct(
        Template\Context $context,
        StoreManagerInterface $storeManager,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->storeManager = $storeManager;
    }

    public function getCurrentUrl() {
        return urldecode($this->storeManager->getStore()->getCurrentUrl());
    }
}
