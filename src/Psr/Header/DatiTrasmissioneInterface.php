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

namespace SerendipityHQ\Component\FatturaElettronica\Psr\Header;

use SerendipityHQ\Component\FatturaElettronica\Psr\Header\DatiTrasmissione\ContattiTrasmittenteInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Type\EmailTypeInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Type\IdFiscaleTypeInterface;

/**
 * Represents DatiTrasmissione.
 */
interface DatiTrasmissioneInterface
{
    /** @var string Verso PA-ver 1.2 */
    public const FORMATO_TRASMISSIONE_FPA12 = 'FPA12';

    /** @var string Verso privati-ver 1.2 */
    public const FORMATO_TRASMISSIONE_FPR12 = 'FPR12';

    /**
     * @return IdFiscaleTypeInterface
     */
    public function getIdTrasmittente(): IdFiscaleTypeInterface;

    /**
     * @return string
     */
    public function getProgressivoInvio(): string;

    /**
     * @return string
     */
    public function getFormatoTrasmissione(): string;

    /**
     * @return string
     */
    public function getCodiceDestinatario(): string;

    /**
     * @return ContattiTrasmittenteInterface|null
     */
    public function getContattiTrasmittente(): ? ContattiTrasmittenteInterface;

    /**
     * @return EmailTypeInterface|null
     */
    public function getPecDestinatario(): ?EmailTypeInterface;
}
