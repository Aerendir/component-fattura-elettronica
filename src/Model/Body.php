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

use SerendipityHQ\Component\FatturaElettronica\Psr\Body\AllegatiInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Body\BeniServiziInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Body\DatiGeneraliInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Body\DatiPagamentoInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\Body\DatiVeicoliInterface;
use SerendipityHQ\Component\FatturaElettronica\Psr\BodyInterface;

/**
 * {@inheritdoc}
 */
final class Body implements BodyInterface
{
    private $datiGenerali;

    private $beniServizi;

    private $datiVeicoli;

    private $datiPagamento;

    private $allegati;

    /**
     * {@inheritdoc}
     */
    public function getDatiGenerali(): DatiGeneraliInterface
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getDatiBeniServizi(): BeniServiziInterface
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getDatiVeicoli(): ?DatiVeicoliInterface
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getDatiPagamento(): ?DatiPagamentoInterface
    {
    }

    /**
     * {@inheritdoc}
     */
    public function getAllegati(): ?AllegatiInterface
    {
    }
}
