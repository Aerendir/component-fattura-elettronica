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

namespace SerendipityHQ\Component\FatturaElettronica\Psr;

/**
 * Represents an italian electronic invoice.
 */
interface FatturaElettronicaInterface
{
    /**
     * @return HeaderInterface
     */
    public function getHeader(): HeaderInterface;

    /**
     * @param int $position
     */
    public function getBody(int $position = 0): \SerendipityHQ\Component\FatturaElettronica\Psr\BodyInterface;
}
