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

namespace SerendipityHQ\Component\FatturaElettronica\Model\Header\DatiTrasmissione;

use SerendipityHQ\Component\FatturaElettronica\Psr\Header\DatiTrasmissione\ContattiTrasmittenteInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Type\EmailTypeInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Type\TelefonoTypeInterface;

final class ContattiTrasmittente implements ContattiTrasmittenteInterface
{
    private TelefonoTypeInterface $telefono;
    private EmailTypeInterface $email;

    public function __construct(TelefonoTypeInterface $telefono, EmailTypeInterface $email)
    {
        $this->telefono = $telefono;
        $this->email    = $email;
    }

    public function getTelefono(): ?TelefonoTypeInterface
    {
        return $this->telefono;
    }

    public function getEmail(): ?EmailTypeInterface
    {
        return $this->email;
    }
}
