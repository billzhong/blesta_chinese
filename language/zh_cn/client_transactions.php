<?php
/**
 * Language definitions for the Client Transactions controller/views
 * 
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Index
$lang['ClientTransactions.index.page_title'] = "会员 #%1\$s 交易"; // %1$s is the client ID number

$lang['ClientTransactions.index.boxtitle_transactions'] = "交易记录";
$lang['ClientTransactions.index.category_approved'] = "成功";
$lang['ClientTransactions.index.category_declined'] = "失败";

$lang['ClientTransactions.index.heading_type'] = "类型";
$lang['ClientTransactions.index.heading_amount'] = "金额";
$lang['ClientTransactions.index.heading_credited'] = "可用";
$lang['ClientTransactions.index.heading_applied'] = "已用";
$lang['ClientTransactions.index.heading_number'] = "交易号";
$lang['ClientTransactions.index.heading_date'] = "日期";

$lang['ClientTransactions.index.no_results'] = "没有%1\$s的交易记录。"; // %1$s is the language for the transaction category type (e.g. Approved, Declined)


// Applied
$lang['ClientTransactions.applied.heading_invoice'] = "账单";
$lang['ClientTransactions.applied.heading_amount'] = "金额";
$lang['ClientTransactions.applied.heading_appliedon'] = "支付日期";
$lang['ClientTransactions.applied.no_results'] = "该交易还未用于支付任何账单。";
?>