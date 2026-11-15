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

namespace SerendipityHQ\Component\FatturaElettronica\Model;

use SerendipityHQ\Component\FatturaElettronica\Property\DOMAware;
use SerendipityHQ\Component\FatturaElettronica\Psr\BodyInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\FatturaElettronicaInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\HeaderInterface;

final class FatturaElettronica implements FatturaElettronicaInterface
{
    use DOMAware;

    private ?Header $header = null;

    /** @var BodyInterface $bodyDocument */
    private $body;

    public function getHeader(): HeaderInterface
    {
        if (null === $this->header) {
            $header = $this->getDOMDocument()->createElement('FatturaElettronicaHeader');
            $this->getDOMElement()->appendChild($header);
            $this->header = new Header($this->getDOMDocument(), $header);
        }

        return $this->header;
    }

    public function getBody(int $position = 0): BodyInterface
    {
    }
}
