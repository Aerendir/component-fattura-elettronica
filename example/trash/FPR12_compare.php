<?php

include '../vendor/autoload.php';

// https://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/IT01234567890_FPR01.xml
$root = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<p:FatturaElettronica
    xmlns:p="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2" xmlns:ds="http://www.w3.org/2000/09/xmldsig#"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    versione="FPR12"
    xsi:schemaLocation="http://ivaservizi.agenziaentrate.gov.it/docs/xsd/fatture/v1.2 http://www.fatturapa.gov.it/export/fatturazione/sdi/fatturapa/v1.2/Schema_del_file_xml_FatturaPA_versione_1.2.xsd"
>
    <FatturaElettronicaHeader>
        <DatiTrasmissione>
            <IdTrasmittente>
                <IdPaese>IT</IdPaese>
                <IdCodice>01234567890</IdCodice>
            </IdTrasmittente>
            <ProgressivoInvio>00001</ProgressivoInvio>
            <FormatoTrasmissione>FPR12</FormatoTrasmissione>
            <CodiceDestinatario>ABC1234</CodiceDestinatario>
            <ContattiTrasmittente />
        </DatiTrasmissione>
        <CedentePrestatore>
            <DatiAnagrafici>
                <IdFiscaleIVA>
                    <IdPaese>IT</IdPaese>
                    <IdCodice>01234567890</IdCodice>
                </IdFiscaleIVA>
                <Anagrafica>
                    <Denominazione>SOCIETA' ALPHA SRL</Denominazione>
                </Anagrafica>
                <RegimeFiscale>RF19</RegimeFiscale>
            </DatiAnagrafici>
            <Sede>
                <Indirizzo>VIALE ROMA 543</Indirizzo>
                <CAP>07100</CAP>
                <Comune>SASSARI</Comune>
                <Provincia>SS</Provincia>
                <Nazione>IT</Nazione>
            </Sede>
        </CedentePrestatore>
        <CessionarioCommittente>
            <DatiAnagrafici>
                <CodiceFiscale>09876543210</CodiceFiscale>
                <Anagrafica>
                    <Denominazione>DITTA BETA</Denominazione>
                </Anagrafica>
            </DatiAnagrafici>
            <Sede>
                <Indirizzo>VIA TORINO 38-B</Indirizzo>
                <CAP>00145</CAP>
                <Comune>ROMA</Comune>
                <Provincia>RM</Provincia>
                <Nazione>IT</Nazione>
            </Sede>
        </CessionarioCommittente>
    </FatturaElettronicaHeader>
    <FatturaElettronicaBody>
        <DatiGenerali>
            <DatiGeneraliDocumento>
                <TipoDocumento>TD01</TipoDocumento>
                <Divisa>EUR</Divisa>
                <Data>2014-12-18</Data>
                <Numero>123</Numero>
                <Causale>LA FATTURA FA RIFERIMENTO AD UNA OPERAZIONE AAAA BBBBBBBBBBBBBBBBBB CCC DDDDDDDDDDDDDDD E FFFFFFFFFFFFFFFFFFFF GGGGGGGGGG HHHHHHH II LLLLLLLLLLLLLLLLL MMM NNNNN OO PPPPPPPPPPP QQQQ RRRR SSSSSSSSSSSSSS</Causale>
                <Causale>SEGUE DESCRIZIONE CAUSALE NEL CASO IN CUI NON SIANO STATI SUFFICIENTI 200 CARATTERI AAAAAAAAAAA BBBBBBBBBBBBBBBBB</Causale>
            </DatiGeneraliDocumento>
            <DatiOrdineAcquisto>
                <RiferimentoNumeroLinea>1</RiferimentoNumeroLinea>
                <IdDocumento>66685</IdDocumento>
                <NumItem>1</NumItem>
            </DatiOrdineAcquisto>
            <DatiContratto>
                <RiferimentoNumeroLinea>1</RiferimentoNumeroLinea>
                <IdDocumento>123</IdDocumento>
                <Data>2012-09-01</Data>
                <NumItem>5</NumItem>
                <CodiceCUP>123abc</CodiceCUP>
                <CodiceCIG>456def</CodiceCIG>
            </DatiContratto>
            <DatiTrasporto>
                <DatiAnagraficiVettore>
                    <IdFiscaleIVA>
                        <IdPaese>IT</IdPaese>
                        <IdCodice>24681012141</IdCodice>
                    </IdFiscaleIVA>
                    <Anagrafica>
                        <Denominazione>Trasporto spa</Denominazione>
                    </Anagrafica>
                </DatiAnagraficiVettore>
                <DataOraConsegna>2012-10-22T16:46:12.000+02:00</DataOraConsegna>
            </DatiTrasporto>
        </DatiGenerali>
        <DatiBeniServizi>
            <DettaglioLinee>
                <NumeroLinea>1</NumeroLinea>
                <Descrizione>DESCRIZIONE DELLA FORNITURA</Descrizione>
                <Quantita>5.00</Quantita>
                <PrezzoUnitario>1.00</PrezzoUnitario>
                <PrezzoTotale>5.00</PrezzoTotale>
                <AliquotaIVA>22.00</AliquotaIVA>
            </DettaglioLinee>
            <DatiRiepilogo>
                <AliquotaIVA>22.00</AliquotaIVA>
                <ImponibileImporto>5.00</ImponibileImporto>
                <Imposta>1.10</Imposta>
                <EsigibilitaIVA>I</EsigibilitaIVA>
            </DatiRiepilogo>
        </DatiBeniServizi>
        <DatiPagamento>
            <CondizioniPagamento>TP01</CondizioniPagamento>
            <DettaglioPagamento>
                <ModalitaPagamento>MP01</ModalitaPagamento>
                <DataScadenzaPagamento>2015-01-30</DataScadenzaPagamento>
                <ImportoPagamento>6.10</ImportoPagamento>
            </DettaglioPagamento>
        </DatiPagamento>
    </FatturaElettronicaBody>
</p:FatturaElettronica>
XML;

$validator = new \SerendipityHQ\Component\FatturaElettronica\Validator\Validator();
$validator->validateXMLString($root);

dump($validator->getErrors(), $root);
