<?php declare(strict_types=1);

namespace Linkedin\Test\Plugin;

use Magento\Quote\Model\Quote\Address\ToOrderAddress;
use Magento\Sales\Api\Data\OrderAddressInterface;
use Magento\Quote\Model\Quote\Address;

class ConvertQuoteToOrderAddress
{
    public function afterConvert(
        ToOrderAddress $subject,
        OrderAddressInterface $result,
        Address $address
    ): OrderAddressInterface
    {
        if ($linkedinProfile = $address->getData('linkedin_profile')) {
            $result->setData('linkedin_profile', $linkedinProfile);
        }

        return $result;
    }
}
