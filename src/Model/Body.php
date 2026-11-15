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

final class Body implements BodyInterface
{
    private $datiGenerali;
    private $beniServizi;
    private $datiVeicoli;
    private $datiPagamento;
    private $allegati;

    public function getDatiGenerali(): DatiGeneraliInterface
    {
    }

    public function getDatiBeniServizi(): BeniServiziInterface
    {
    }

    public function getDatiVeicoli(): ?DatiVeicoliInterface
    {
    }

    public function getDatiPagamento(): ?DatiPagamentoInterface
    {
    }

    public function getAllegati(): ?AllegatiInterface
    {
    }
}
