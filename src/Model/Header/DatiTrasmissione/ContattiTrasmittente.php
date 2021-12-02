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

/**
 * {@inheritdoc}
 */
final class ContattiTrasmittente implements ContattiTrasmittenteInterface
{
    /**
     * @var \SerendipityHQ\Component\FatturaElettronica\Psr\Type\TelefonoTypeInterface|null
     */
    private $telefono;

    /**
     * @var \SerendipityHQ\Component\FatturaElettronica\Psr\Type\EmailTypeInterface|null
     */
    private $email;

    /**
     * @param TelefonoTypeInterface $telefono
     * @param EmailTypeInterface    $email
     */
    public function __construct(TelefonoTypeInterface $telefono, EmailTypeInterface $email)
    {
        $this->telefono = $telefono;
        $this->email    = $email;
    }

    /**
     * {@inheritdoc}
     */
    public function getTelefono(): ?TelefonoTypeInterface
    {
        return $this->telefono;
    }

    /**
     * {@inheritdoc}
     */
    public function getEmail(): ?EmailTypeInterface
    {
        return $this->email;
    }
}
