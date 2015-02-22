<?php
/**
 * Language definitions for the Client Invoices controller/views
 * 
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Index
$lang['ClientInvoices.index.page_title'] = "会员 #%1\$s 账单"; // %1$s is the client ID number

$lang['ClientInvoices.index.category_open'] = "未支付";
$lang['ClientInvoices.index.category_closed'] = "已支付";

$lang['ClientInvoices.index.categorylink_make_payment'] = "进行支付";

$lang['ClientInvoices.index.boxtitle_invoices'] = "账单";
$lang['ClientInvoices.index.heading_invoice'] = "账单 #";
$lang['ClientInvoices.index.heading_amount'] = "金额";
$lang['ClientInvoices.index.heading_paid'] = "已支付";
$lang['ClientInvoices.index.heading_due'] = "未支付";
$lang['ClientInvoices.index.heading_dateclosed'] = "支付日期";
$lang['ClientInvoices.index.heading_datebilled'] = "创建日期";
$lang['ClientInvoices.index.heading_datedue'] = "过期日期";
$lang['ClientInvoices.index.heading_options'] = "选项";
$lang['ClientInvoices.index.option_view'] = "查看";
$lang['ClientInvoices.index.option_pay'] = "支付";

$lang['ClientInvoices.index.no_results'] = "没有%1\$s账单。"; // %1$s is the language for the invoice category type (e.g. Open, Closed)


// Applied
$lang['ClientInvoices.applied.heading_paymenttype'] = "支付类型";
$lang['ClientInvoices.applied.heading_amount'] = "金额";
$lang['ClientInvoices.applied.heading_applied'] = "支付纪录";
$lang['ClientInvoices.applied.heading_appliedon'] = "支付日期";

$lang['ClientInvoices.applied.no_results'] = "该账单没有相关的交易记录。";
?>