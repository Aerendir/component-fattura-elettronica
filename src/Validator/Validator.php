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

namespace SerendipityHQ\Component\FatturaElettronica\Validator;

use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

/**
 * Validates the XML of a FatturaElettronica.
 */
final class Validator
{
    /** @var string[] $schemas */
    private array $schemas = ['1.2'];

    private array $errors = [];

    public function validateSimpleXMLElement(\SimpleXMLElement $simpleXMLElement): void
    {
        $toXML = $simpleXMLElement->saveXML();

        if (false === \is_string($toXML)) {
            throw new \RuntimeException('An error occurred writing the XML.');
        }

        $this->validateXMLString($toXML);
    }

    public function validateXMLString(string $xml, ?string $schemaVersion = null): void
    {
        \libxml_use_internal_errors(true);
        $dom = new \DOMDocument();
        $dom->loadXML($xml);

        $this->validate($dom, $schemaVersion);
    }

    public function validate(\DOMDocument $document, ?string $schemaVersion = null): self
    {
        \libxml_use_internal_errors(true);

        if (false === $document->schemaValidate($this->getSchema($schemaVersion))) {
            $this->catchErrors();
        }

        \libxml_use_internal_errors(false);

        return $this;
    }

    public function isValid(): bool
    {
        return [] === $this->errors;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * Processes the XML errors found during validation.
     */
    private function catchErrors(): void
    {
        $this->errors = \libxml_get_errors();
        \libxml_clear_errors();
    }

    private function getSchema(?string $schemaVersion): string
    {
        $schemaVersion = $schemaVersion ?? \end($this->schemas);
        $finder        = new Finder();
        $iterator      = $finder->name($schemaVersion . '.xsd')->in(__DIR__ . DIRECTORY_SEPARATOR . '../Schemas')->getIterator();
        $iterator->rewind();
        /** @var SplFileInfo $schema */
        $schema = $iterator->current();

        return $schema->getPathname();
    }
}
