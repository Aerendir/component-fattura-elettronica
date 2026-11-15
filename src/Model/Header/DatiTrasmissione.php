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

namespace SerendipityHQ\Component\FatturaElettronica\Model\Header;

use SerendipityHQ\Component\FatturaElettronica\Property\DOMAware;
use SerendipityHQ\Component\FatturaElettronica\Psr\Header\DatiTrasmissione\ContattiTrasmittenteInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Header\DatiTrasmissioneInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Type\EmailTypeInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Type\IdFiscaleTypeInterface;

final class DatiTrasmissione implements DatiTrasmissioneInterface
{
    use DOMAware;

    /** @var IdFiscaleTypeInterface $idTrasmittente */
    private $idTrasmittente;

    /** @var string $progressivoInvio */
    private $progressivoInvio;

    /**
     * @var string One between
     *             DatiTrasmissioneInterface::FORMATO_TRASMISSIONE_FPA12 and
     *             DatiTrasmissioneInterface::FORMATO_TRASMISSIONE_FPR12
     */
    private $formatoTrasmissione;

    /** @var string $codiceDestinatario */
    private $codiceDestinatario;

    /** @var ContattiTrasmittenteInterface|null $contattiTrasmittente */
    private $contattiTrasmittente;

    /** @var EmailTypeInterface|null $pecDestinatario */
    private $pecDestinatario;

    public function getIdTrasmittente(): IdFiscaleTypeInterface
    {
        return $this->idTrasmittente;
    }

    public function getProgressivoInvio(): string
    {
        return $this->progressivoInvio;
    }

    public function getFormatoTrasmissione(): string
    {
        return $this->formatoTrasmissione;
    }

    public function getCodiceDestinatario(): string
    {
        return $this->codiceDestinatario;
    }

    public function getContattiTrasmittente(): ?ContattiTrasmittenteInterface
    {
        return $this->contattiTrasmittente;
    }

    public function getPecDestinatario(): ?EmailTypeInterface
    {
        return $this->pecDestinatario;
    }
}
