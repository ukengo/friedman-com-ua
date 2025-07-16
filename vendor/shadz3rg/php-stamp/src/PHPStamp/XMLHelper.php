<?php
namespace PHPStamp;

use PHPStamp\Exception\ParsingException;

class XMLHelper
{
    /**
     * Check two given nodes for equality.
     * @param $node1 \DOMNode|null
     * @param $node2 \DOMNode|null
     * @return bool
     * @link http://www.w3.org/TR/2003/WD-DOM-Level-3-Core-20030226/DOM3-Core.html#core-Node3-isEqualNode
     * @link https://github.com/WebKit/webkit/blob/master/Source/WebCore/dom/Node.cpp#L1081
     */
    public function deepEqual($node1, $node2)
    {
        if ($node1 === null && $node2 === null) {
            return true;
        }

        if (($node1 === null && $node2 !== null) || ($node1 !== null && $node2 === null)) {
            return false;
        }

        // 1 Compare properties
        if ($node1->nodeType !== $node2->nodeType) {
            return false;
        }
        if ($node1->nodeName !== $node2->nodeName) {
            return false;
        }
        if ($node1->localName !== $node2->localName) {
            return false;
        }
        if ($node1->namespaceURI !== $node2->namespaceURI) {
            return false;
        }
        if ($node1->prefix !== $node2->prefix) {
            return false;
        }
        if ($node1->nodeValue !== $node2->nodeValue) {
            return false;
        }

        // 2 Compare attributes
        if ($this->compareAttributes($node1, $node2) === false) {
            return false;
        }

        // 3 Compare child nodes recursively
        $node1Child = $node1->firstChild;
        $node2Child = $node2->firstChild;

        while ($node1Child) {

            if ($node2Child === null) { // if $node1 child count > $node2 child count
                return false;
            }

            if ($this->deepEqual($node1Child, $node2Child) === false) {
                return false;
            }


            $node1Child = $node1Child->nextSibling;
            $node2Child = $node2Child->nextSibling;
        }

        if ($node2Child !== null) { // if $node2 child count > $node1 child count
            return false;
        }

        // 4 Compare document types
        $node1DocumentType = $node1->ownerDocument->doctype;
        $node2DocumentType = $node2->ownerDocument->doctype;

        if ($node1DocumentType !== null && $node2DocumentType !== null) {
            if ($node1DocumentType->publicId !== $node2DocumentType->publicId) {
                return false;
            }
            if ($node1DocumentType->systemId !== $node2DocumentType->systemId) {
                return false;
            }
            if ($node1DocumentType->internalSubset !== $node2DocumentType->internalSubset) {
                return false;
            }
        }

        return true;
    }

    /**
     * Check two given nodes for equal attributes.
     * @param \DOMNode $node1
     * @param \DOMNode $node2
     * @return bool
     */
    private function compareAttributes(\DOMNode $node1, \DOMNode $node2)
    {
        if ($node1->hasAttributes() === false && $node2->hasAttributes() === false) {
            return true;
        }

        if ($node1->hasAttributes() !== $node2->hasAttributes()) {
            return false;
        }

        if ($node1->attributes->length !== $node2->attributes->length) {
            return false;
        }

        /** @var $attribute \DOMNode */
        foreach ($node1->attributes as $attribute) {
            // namespace problem, localName as fix
            $compareAgainst = $node2->attributes->getNamedItem($attribute->localName);

            if ($compareAgainst === null || $attribute->nodeValue !== $compareAgainst->nodeValue) {
                return false;
            }
        }
    }

    /**
     * Fetch node list from document.
     * @param \DOMDocument $document
     * @param $xpathQuery
     * @return \DOMNodeList
     */
    public static function queryTemplate(\DOMDocument $document, $xpathQuery)
    {
        $xpath = new \DOMXPath($document);
        return $xpath->query($xpathQuery);
    }

    /**
     * Formats DOMDocument for html output.
     * @codeCoverageIgnore
     * @param \DOMDocument $document
     * @return string
     */
    public static function prettyPrint(\DOMDocument $document)
    {
        $document->preserveWhiteSpace = false;
        $document->formatOutput = true;

        $xmlString = $document->saveXML();

        $document->preserveWhiteSpace = true;
        $document->formatOutput = false;

        return '<pre>' . htmlentities($xmlString) . '</pre>';
    }

    /**
     * Find closest parent node.
     * @param $nodeName
     * @param \DOMNode $node
     * @return \DOMNode
     * @throws Exception\ParsingException
     */
    public static function parentUntil($nodeName, \DOMNode $node)
    {
        $parent = $node->parentNode;
        while ($parent->nodeName !== $nodeName) {
            $parent = $parent->parentNode;
            if ($parent === null) {
                throw new ParsingException('Row not found.');
            }
        }

        return $parent;
    }

    /**
     * Add associative array values into XML object recursively.
     * @param $mixed
     * @param \DOMNode $domElement
     * @param \DOMDocument $domDocument
     * @param string $itemName
     */
    public static function xmlEncode($mixed, \DOMNode $domElement, \DOMDocument $domDocument, $itemName = 'item')
    {
        if (is_array($mixed)) {
            foreach ($mixed as $index => $mixedElement) {

                $tagName = $index;
                if (is_int($index)) {
                    $tagName = $itemName;
                }

                $node = $domDocument->createElement($tagName);
                $domElement->appendChild($node);

                self::xmlEncode($mixedElement, $node, $domDocument, $itemName);
            }
        } else {
            $domElement->appendChild($domDocument->createTextNode($mixed));
        }
    }
}