<?php
/**
 * integer_net Magento Module
 *
 * @category   IntegerNet
 * @package    IntegerNet_SolrSuggest
 * @copyright  Copyright (c) 2016 integer_net GmbH (http://www.integer-net.de/)
 * @author     Fabian Schmengler <fs@integer-net.de>
 */
namespace IntegerNet\SolrSuggest\Implementor\Factory;

use IntegerNet\SolrSuggest\Plain\Cache\CacheReader;

interface CacheReaderFactory
{

    /**
     * @return CacheReader
     */
    public function getCacheReader();
}