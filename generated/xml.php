<?php

namespace Safe;

use Safe\Exceptions\XmlException;

/**
 * Frees the given XML parser.
 *
 * @param resource $parser
 * @throws XmlException
 *
 */
function xml_parser_free($parser): void
{
    error_clear_last();
    $safeResult = \xml_parser_free($parser);
    if ($safeResult === false) {
        throw XmlException::createFromPhpError();
    }
}

