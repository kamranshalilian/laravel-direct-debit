<?php


namespace Kamran\DirectDebitBoom;


use Kamran\DirectDebitBoom\Libs\DataAuthorizer;
use Kamran\DirectDebitBoom\Libs\DataCallBack;
use Kamran\DirectDebitBoom\Libs\DataToken;
use Kamran\DirectDebitBoom\Libs\DataWithdrawal;
use Kamran\DirectDebitBoom\Libs\PaymanBill;
use Kamran\DirectDebitBoom\Libs\PaymanReport;
use Kamran\DirectDebitBoom\Libs\PaymanSearch;
use Kamran\DirectDebitBoom\Libs\PaymanStatus;
use Kamran\DirectDebitBoom\Libs\PaymanTransactions;
use Kamran\DirectDebitBoom\Libs\Permissions;
use Kamran\DirectDebitBoom\Libs\TraceReport;

interface BankInterface
{

    public function applicationToken(DataToken $dataToken);



    public function permissions(Permissions $permissions);



    public function authorizer(DataAuthorizer $data);



    public function callBack(DataCallBack $data);



    public function withdrawal(DataWithdrawal $data);



    public function traceReport(TraceReport $data);



    public function paymanReport(PaymanReport $data);



    public function paymanStatus(PaymanStatus $data);



    public function paymanBill(PaymanBill $data);



    public function paymanTransactions(PaymanTransactions $data);



    public function paymanSearch(PaymanSearch $data);
}
