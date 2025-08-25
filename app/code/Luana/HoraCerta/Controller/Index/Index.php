<?php
namespace Luana\HoraCerta\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Stdlib\DateTime\Timezone;

class Index implements HttpGetActionInterface
{
    private Timezone $timezone;

    public function __construct(Timezone $timezone)
    {
        $this->timezone = $timezone;
    }

    public function execute()
    {
        echo "Config timezone: " . $this->timezone->getConfigTimezone() . "<br>";
        echo "Data atual UTC convertida: " . $this->timezone->convertConfigTimeToUtc($this->timezone->date()) . "<br>";
        echo $this->timezone->date()->format('d/m/y H:i');
        exit;
    }
}
