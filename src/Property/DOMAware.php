<?php

declare(strict_types=1);

/*
 * This file is part of the Serendipity HQ Fattura Elettronica Component.
 *
 * Copyright (c) Adamo Aerendir Crespi <aerendir@serendipityhq.com>.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SerendipityHQ\Component\FatturaElettronica\Property;

trait DOMAware
{
    /** @var \DOMDocument $DOMDocument */
    private $DOMDocument;

    /** @var \DOMElement $DOMElement */
    private $DOMElement;

    public function __construct(\DOMDocument $DOMDocument, \DOMElement $DOMElement)
    {
        $this->DOMDocument = $DOMDocument;
        $this->DOMElement  = $DOMElement;
    }

    public function getDOMDocument(): \DOMDocument
    {
        return $this->DOMDocument;
    }

    public function getDOMElement(): \DOMElement
    {
        return $this->DOMElement;
    }
}
