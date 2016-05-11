<?php
namespace RocketLabs\SellerCenterSdk\Core\Request\OutputFormatAdapter;

/**
 * Class XmlOutputFormatAdapter
 */
class XmlOutputFormatAdapter implements OutputFormatAdapterInterface
{
    /**
     * @inheritdoc
     */
    public function convertToOutputFormat(array $bodyContent)
    {
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><Request/>');
        $this->addToNode($bodyContent, $xml);

        return $xml->asXML();
    }

    /**
     * @param array|string $content
     * @param \SimpleXMLElement $node
     * @param \SimpleXMLElement|null $parentNode
     */
    protected function addToNode(
        $content,
        \SimpleXMLElement $node,
        \SimpleXMLElement $parentNode = null
    ) {
        if (is_array($content)) {
            foreach ($content as $argument => $value) {
                if (0 === $argument) {
                    $newNode = $node;
                } elseif (is_numeric($argument) && null !== $parentNode) {
                    $newNode = $parentNode->addChild($node->getName());
                } else {
                    $newNode = $node->addChild($argument);
                }

                $this->addToNode($value, $newNode, $node);
            }
        } else {
            dom_import_simplexml($node)->nodeValue = htmlentities($content);
        }
    }
}
