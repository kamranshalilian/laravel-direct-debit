<?php


namespace Kamran\DirectDebitBoom;

use Kamran\DirectDebitBoom\Boomir\Boomir;

class BankAdapter
{

    public function __construct()
    {
    }



    public function bank($code = null): BankAbstract
    {
        return new Boomir();
    }
}
