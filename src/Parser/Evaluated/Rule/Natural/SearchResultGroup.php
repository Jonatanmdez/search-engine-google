<?php
/**
 * @license see LICENSE
 */

namespace Serps\SearchEngine\Google\Parser\Evaluated\Rule\Natural;

use Serps\Core\Serp\IndexedResultSet;
use Serps\SearchEngine\Google\Page\GoogleDom;
use Serps\SearchEngine\Google\Parser\ParsingRuleInterace;

/**
 * This is a group of results that need to be sub-parsed
 */
class SearchResultGroup implements ParsingRuleInterace
{
    public function match(GoogleDom $dom, \DOMElement $node)
    {
        if ($node->getAttribute('class') == 'srg') {
            return $node->childNodes;
        } else {
            return self::RULE_MATCH_NOMATCH;
        }
    }

    public function parse(GoogleDom $dom, \DomElement $node, IndexedResultSet $resultSet)
    {
    }
}
