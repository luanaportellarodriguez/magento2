<?php
namespace Luana\Sharer\Block;

use Magento\Framework\View\Element\Template;

class Sharer extends Template
{
    public function __construct(Template\Context $context, array $data = [], StoreManagerInterface $storeManager) {
        parent::__construct($context, $data);
        $this->storeManager = $storeManager;
    }

    public function getCurrentUrl() {
        return $this->storeManager->getStore()->getCurrentUrl();
    }
}