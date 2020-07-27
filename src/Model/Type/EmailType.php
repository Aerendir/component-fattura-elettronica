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

use SerendipityHQ\Component\FatturaElettronica\Psr\Type\EmailTypeInterface;

/**
 * {@inheritdoc}
 */
final class EmailType implements EmailTypeInterface
{
    /** @var string $email */
    private $email;

    /**
     * @param string $email
     */
    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * {@inheritdoc}
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}
