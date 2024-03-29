<?php

// Copyright (C) 2021 Ivan Stasiuk <ivan@stasi.uk>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\RemitOne\Models;

/**
 * @author Ivan Stasiuk <ivan@stasi.uk>
 */
class ErrorTransactionsResult
{
    public function __construct(
        private int $count,
        private ?ErrorTransactionsWrapper $transactions,
    ) {
    }

    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @return ErrorTransaction[]
     */
    public function getTransactionsList(): array
    {
        return $this->transactions ? $this->transactions->getTransaction() : [];
    }
}
