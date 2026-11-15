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

namespace SerendipityHQ\Component\FatturaElettronica\Model\Type;

use SerendipityHQ\Component\FatturaElettronica\Psr\Type\TelefonoTypeInterface;

final class TelefonoType implements TelefonoTypeInterface
{
    private string $telefono;

    public function __construct(string $telefono)
    {
        $this->telefono = $telefono;
    }

    public function getTelefono(): string
    {
        return $this->telefono;
    }
}
