<?php
/**
 * integer_net Magento Module
 *
 * @category   IntegerNet
 * @package    IntegerNet_SolrSuggest
 * @copyright  Copyright (c) 2016 integer_net GmbH (http://www.integer-net.de/)
 * @author     Andreas von Studnitz <avs@integer-net.de>
 */
namespace IntegerNet\SolrCategories\Result;

final class CategorySuggestion
{
    /**
     * @var string
     */
    private $queryText;
    /**
     * @var int
     */
    private $numResults;

    /**
     * CategorySuggestion constructor.
     * @param string $queryText
     * @param int $numResults
     */
    public function __construct($queryText, $numResults)
    {
        $this->queryText = $queryText;
        $this->numResults = $numResults;
    }

    /**
     * @return string
     */
    public function getQueryText()
    {
        return $this->queryText;
    }

    /**
     * @return int
     */
    public function getNumResults()
    {
        return $this->numResults;
    }

}