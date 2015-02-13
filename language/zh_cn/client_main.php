<?php
/**
 * Language definitions for the Client Main controller/views
 * 
 * @package blesta
 * @subpackage blesta.language.zh_cn
 * @copyright Copyright (c) 2010, Phillips Data, Inc.
 * @license http://www.blesta.com/license/ The Blesta License Agreement
 * @link http://www.blesta.com/ Blesta
 */

// Success messages
$lang['ClientMain.!success.client_updated'] = "您的用户信息已经成功更新。";
$lang['ClientMain.!success.invoice_method_updated'] = "您的账单发送方式已经成功更新。未来的账单将会通过 %1\$s 发送。"; // %1$s is the clients invoice method (e.g. Email, Paper, etc.)


// Info message
$lang['ClientMain.!info.invoice_due_title'] = "欢迎回来，%1\$s！"; // %1$s is the client's first name
$lang['ClientMain.!info.invoice_due_button'] = "进行支付";
$lang['ClientMain.!info.invoice_due_text'] = "您的账户有未支付金额 %1\$s。请尽快支付。"; // %1$s is the total amount due for this client
$lang['ClientMain.!info.invoice_due_other_currencies'] = "您还有未支付的金额在其他币种。";


// Tooltips
$lang['ClientMain.!tooltip.invoice_method_email'] = "账单将会发送到电子邮箱。";
$lang['ClientMain.!tooltip.invoice_method_paper'] = "我们会打印并邮寄到邮箱。";
$lang['ClientMain.!tooltip.invoice_method_interfax'] = "我们会自动传真账单给您。如果选择此项，您必须提供一个正确的传真号码。";
$lang['ClientMain.!tooltip.invoice_method_postalmethods'] = "我们会自动打印账单并邮寄到信箱。";


// Index
$lang['ClientMain.index.page_title'] = "会员 #%1\$s"; // %1$s is the client ID number


// Myinfo
$lang['ClientMain.myinfo.page_title'] = "会员 #%1\$s"; // %1$s is the client ID number

$lang['ClientMain.myinfo.boxtitle_client'] = "我的信息";
$lang['ClientMain.myinfo.setting_invoices'] = "您通过 %1\$s 接受账单。"; // %1$s is the clients invoice method (e.g. Email, Paper, etc.)
$lang['ClientMain.myinfo.setting_autodebit_disabled'] = "您未设置自动支付。";
$lang['ClientMain.myinfo.setting_autodebit_enabled'] = "您已设置自动支付。";
$lang['ClientMain.myinfo.setting_autodebit_cc_zero_days'] = "We'll charge your %1\$s ending in x%2\$s on the day payment is due."; // %1$s is the type of credit card (e.g. "Visa"), %2$s is the last 4 of the credit card number
$lang['ClientMain.myinfo.setting_autodebit_ach_zero_days'] = "We'll charge your %1\$s Account ending in x%2\$s on the day payment is due."; // %1$s is the type of payment account to charge (e.g. "Checking"), %2$s is the last 4 of the account number
$lang['ClientMain.myinfo.setting_autodebit_cc_one_day'] = "We'll charge your %1\$s ending in x%2\$s the day before payment is due."; // %1$s is the type of credit card (e.g. "Visa"), %2$s is the last 4 of the credit card number
$lang['ClientMain.myinfo.setting_autodebit_ach_one_day'] = "We'll charge your %1\$s Account ending in x%2\$s the day before payment is due."; // %1$s is the type of payment account to charge (e.g. "Checking"), %2$s is the last 4 of the account number
$lang['ClientMain.myinfo.setting_autodebit_cc_days'] = "We'll charge your %1\$s ending in x%2\$s %3\$s days before payment is due."; // %1$s is the type of credit card (e.g. "Visa"), %2$s is the last 4 of the credit card number, %3$s is the plural number of days (two or more) before a payment is due when the client's payment account will be charged
$lang['ClientMain.myinfo.setting_autodebit_ach_days'] = "We'll charge your %1\$s Account ending in x%2\$s %3\$s days before payment is due."; // %1$s is the type of payment account to charge (e.g. "Checking"), %2$s is the last 4 of the account number, %3$s is the plural number of days (two or more) before a payment is due when the client's payment account will be charged


$lang['ClientMain.myinfo.setting_change'] = "更改？";

$lang['ClientMain.myinfo.link_editclient'] = "更改";

$lang['ClientMain.myinfo.client_id'] = "会员编号：%1\$s"; // %1$s is the client ID


// Edit Client
$lang['ClientMain.edit.heading_contact'] = "联系信息";
$lang['ClientMain.edit.page_title'] = "会员 #%1\$s 编辑我的信息"; // %1$s is the client ID number
$lang['ClientMain.edit.boxtitle_edit'] = "编辑我的信息";

$lang['ClientMain.edit.heading_billing'] = "财务信息";
$lang['ClientMain.edit.field_taxid'] = "Tax ID/VATIN";
$lang['ClientMain.edit.field_default_currency'] = "首选货币";
$lang['ClientMain.edit.field_invoiceaddress'] = "账单地址";

$lang['ClientMain.edit.heading_settings'] = "其他设置";
$lang['ClientMain.edit.field_language'] = "语言";

$lang['ClientMain.edit.heading_authentication'] = "验证设置";
$lang['ClientMain.edit.field_username'] = "用户名";
$lang['ClientMain.edit.field_new_password'] = "密码";
$lang['ClientMain.edit.field_confirm_password'] = "确认密码";
$lang['ClientMain.edit.field_current_password'] = "当前密码";
$lang['ClientMain.edit.field_two_factor_mode'] = "启用两步验证";
$lang['ClientMain.edit.two_factor_desc'] = "两步验证是一种安全手段。如果启用，除了用户名密码外，还需要输入一次性密码。";
$lang['ClientMain.edit.two_factor_instructions'] = "如果启用两步验证，需要 TOTP 令牌。如果您有智能手机，可以用来生成一次性密码。";
$lang['ClientMain.edit.two_factor_step1'] = "下载需要的手机软件：";
$lang['ClientMain.edit.two_factor_step2'] = "打开软件，扫描下面的二维码，或输入密钥 %1\$s"; // %1$s is the key
$lang['ClientMain.edit.two_factor_step3'] = "输入一次性密码，点击更新我的信息。下次登入的时候将要求输入一次性密码。";
$lang['ClientMain.edit.text_android'] = "Android";
$lang['ClientMain.edit.text_ios'] = "iOS";
$lang['ClientMain.edit.text_windows'] = "Windows";
$lang['ClientMain.edit.field_otp'] = "一次性密码";

$lang['ClientMain.edit.field_editsubmit'] = "更新我的信息";




// Invoice Method
$lang['ClientMain.invoicemethod.page_title'] = "会员 #%1\$s 账单发送方式"; // %1$s is the client ID number

$lang['ClientMain.invoicemethod.boxtitle_inv_method'] = "账单发送方式";
$lang['ClientMain.invoicemethod.text_invoice_method'] = "这是我们发送账单的方式。";
$lang['Clientmain.invoicemethod.field_methodsubmit'] = "更新";


// Currency amounts
$lang['ClientMain.getcurrencyamounts.text_total_credits'] = "余额：";
?>