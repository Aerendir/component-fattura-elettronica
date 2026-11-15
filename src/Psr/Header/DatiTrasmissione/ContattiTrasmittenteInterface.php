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

namespace SerendipityHQ\Component\FatturaElettronica\Psr\Header\DatiTrasmissione;

use SerendipityHQ\Component\FatturaElettronica\Psr\Type\EmailTypeInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Type\TelefonoTypeInterface;

/**
 * Represents Contatti Trasmittente.
 */
interface ContattiTrasmittenteInterface
{
    public function getTelefono(): ?TelefonoTypeInterface;

    public function getEmail(): ?EmailTypeInterface;
}
