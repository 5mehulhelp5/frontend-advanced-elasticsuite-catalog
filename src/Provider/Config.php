<?php

declare(strict_types=1);

namespace Magexperts\AdvancedElasticsuiteCatalog\Provider;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;


class Config
{
    /**
     * General Active
     *
     * @var string GENERAL_ACTIVE
     */
    public const GENERAL_ACTIVE = 'smile_advanced_elasticsuite_catalog/general/active';

    /**
     * Slider direct mode active
     *
     * @var string SLIDER_DIRECT_MODE_ACTIVE
     */
    public const SLIDER_DIRECT_MODE_ACTIVE = 'smile_advanced_elasticsuite_catalog/slider/direct_mode_active';
    /**
     * Scope config interface
     *
     * @var ScopeConfigInterface $scopeConfig
     */
    protected $scopeConfig;

    /**
     * Config constructor
     *
     * @param ScopeConfigInterface $scopeConfig
     *
     * @return void
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Is value
     *
     * @param string $path
     * @param mixed  $store
     *
     * @return bool
     */
    public function isValue(string $path, $store = null): bool
    {
        return (bool) $this->scopeConfig->getValue(
            $path,
            ScopeInterface::SCOPE_STORES,
            $store
        );
    }

    /**
     * Get value
     *
     * @param string $path
     * @param mixed  $store
     *
     * @return string
     */
    public function getValue(string $path, $store = null): string
    {
        return (string) $this->scopeConfig->getValue(
            $path,
            ScopeInterface::SCOPE_STORES,
            $store
        );
    }
}
