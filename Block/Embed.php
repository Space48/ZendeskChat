<?php

namespace Space48\ZendeskChat\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Store\Model\ScopeInterface;

class Embed extends Template
{
    const XML_PATH = 's48_zendeskchat/settings/';

    /**
     * Embed constructor.
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {

        parent::__construct(
            $context,
            $data
        );
    }

    /**
     * Checks if module is enabled in config
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->_scopeConfig->isSetFlag(
            self::XML_PATH."enabled",
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Zend Desk ID stored from config
     *
     * @return mixed
     */
    public function getZendeskId()
    {
        return $this->_scopeConfig->getValue(
            self::XML_PATH."id",
            ScopeInterface::SCOPE_STORE
        );
    }
}
