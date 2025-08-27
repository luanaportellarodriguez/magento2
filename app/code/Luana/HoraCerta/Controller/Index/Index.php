<?php
namespace Luana\HoraCerta\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Stdlib\DateTime\Timezone;
use Magento\Framework\Controller\ResultFactory;

class Index implements HttpGetActionInterface
{
    private Timezone $timezone;
    private ResultFactory $resultFactory;

    public function __construct(Timezone $timezone,  ResultFactory $resultFactory)
    {
        $this->timezone = $timezone;
        $this->resultFactory = $resultFactory;
    }

    public function execute()
    {
        //echo "Config timezone: " . $this->timezone->getConfigTimezone() . "<br>";
        //echo "Data atual UTC convertida: " . $this->timezone->convertConfigTimeToUtc($this->timezone->date()) . "<br>";
        $conteudo = $this->timezone->date()->format('d/m/y H:i');
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents($conteudo);
        return $result;
    }
}
