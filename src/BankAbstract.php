<?php


namespace Kamran\DirectDebitBoom;


use Kamran\DirectDebitBoom\Libs\DataToken;

/**
 * Class BankAbstract
 *
 * @package App\Lib\Adapter\Bank
 */
abstract class BankAbstract implements BankInterface
{
    protected $application;
    protected $customer;

}
