<?php declare(strict_types=1);
/*
 * This file is part of Phive.
 *
 * Copyright (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de> and contributors
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace PharIo\Phive;

class GnupgKeyImporter implements KeyImporter {
    /** @var GnuPG */
    private $gnupg;

    public function __construct(GnuPG $gnupg) {
        $this->gnupg = $gnupg;
    }

    public function importKey(string $key): KeyImportResult {
        $result = $this->gnupg->import($key);

        return new KeyImportResult(
            $result['imported'] ?? 0,
            $result['fingerprint'] ?? ''
        );
    }
}
