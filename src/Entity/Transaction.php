<?php

namespace Laundrette\Entity;

class Transaction {
  private $datetime;
  private $machine;
  // Amount in 'ører'. (Never use double to represent money)
  private $amount;

  public function __construct(DateTime $datetime, Machine $machine, int $amount) {
    // Datetime and Machine must not change for a given transaction, so we
    // clone them.
    $this->datetime = clone $datetime;
    $this->machine = clone $machine;
    $this->amount = $amount;
  }

}