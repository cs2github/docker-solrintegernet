<?php
/**
 * integer_net Magento Module
 *
 * @category   IntegerNet
 * @package    IntegerNet_Solr
 * @copyright  Copyright (c) 2015 integer_net GmbH (http://www.integer-net.de/)
 * @author     Fabian Schmengler <fs@integer-net.de>
 */
namespace IntegerNet\Solr\Implementor;

interface PagedProductIterator extends ProductIterator
{
    /**
     * Define a callback that is called after each "page" iteration (i.e. finished inner iterator)
     *
     * @param callable $callback
     */
    public function setPageCallback($callback);

    /**
     * @return \IntegerNet\Solr\Indexer\Data\ProductIdChunk
     */
    public function currentChunk();

    /**
     * Returns an iterator for a subset of products. The ids must be part of the current chunk, otherwise an
     * OutOfBoundsException will be thrown
     *
     * @param int[] $ids
     * @return ProductIterator
     * @throws \OutOfBoundsException
     */
    public function subset($ids);
}