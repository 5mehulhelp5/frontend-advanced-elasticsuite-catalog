<?php

declare(strict_types=1);

namespace Shellpea\AdvancedElasticsuiteCatalog\Block\Swatches;

use Smile\ElasticsuiteSwatches\Block\Navigation\Renderer\Swatches as BaseSwatches;

class Swatches extends BaseSwatches
{
    /**
     * @var string
     */
    protected $block = 'Shellpea\AdvancedElasticsuiteCatalog\Block\Swatches\RenderLayered';
}
