<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
	'LBL_ACCOUNT_ID' => 'Account ID:',
	'LBL_CASE_ID' => 'Case ID:',
	'LBL_CLOSE' => 'Đóng:',
	'LBL_COLON' => ':',
	'LBL_CONTACT_ID' => 'Contact ID:',
	'LBL_CONTACT_NAME' => 'Liên hệ:',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ghi chú',
	'LBL_DESCRIPTION' => 'Ghi chú',
	'LBL_EMAIL_ADDRESS' => 'Email :',
    'LBL_EMAIL_ATTACHMENT' => 'Email đính kèm',
	'LBL_FILE_MIME_TYPE' => 'Kiểu Mime ',
	'LBL_FILE_URL' => 'File URL',
	'LBL_FILENAME' => 'Đính kèm:',
	'LBL_LEAD_ID' => 'Lead ID:',
	'LBL_LIST_CONTACT_NAME' => 'Liên hệ',
	'LBL_LIST_DATE_MODIFIED' => 'Sửa lần cuối',
	'LBL_LIST_FILENAME' => 'Đính kèm',
	'LBL_LIST_FORM_TITLE' => 'Danh sách ghi chú',
	'LBL_LIST_RELATED_TO' => 'Liên quan đến',
	'LBL_LIST_SUBJECT' => 'Đối tượng',
	'LBL_LIST_STATUS' => 'Trạng thái',
	'LBL_LIST_CONTACT' => 'Liên hệ',
	'LBL_MODULE_NAME' => 'Ghi chú',
	'LBL_MODULE_TITLE' => 'Ghi chú: Trang chủ',
	'LBL_NEW_FORM_TITLE' => 'tạo ghi chú hoặc đính kèm',
	'LBL_NOTE_STATUS' => 'Ghi chú',
	'LBL_NOTE_SUBJECT' => 'Chủ đề:',
	'LBL_NOTES_SUBPANEL_TITLE' => 'Đính kèm',
	'LBL_NOTE' => 'Ghi chú:',
	'LBL_OPPORTUNITY_ID' => 'Opportunity ID:',
	'LBL_PARENT_ID' => 'Parent ID:',
	'LBL_PARENT_TYPE' => 'Parent Type',
	'LBL_PHONE' => 'Điện thoại:',
	'LBL_PORTAL_FLAG' => 'Hiện ở cổng thông tin?',
	'LBL_EMBED_FLAG' => 'Embed in email?',
	'LBL_PRODUCT_ID' => 'Product ID:',
	'LBL_QUOTE_ID' => 'Quote ID:',
	'LBL_RELATED_TO' => 'Liên quan đến:',
	'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm ghi chú',
	'LBL_STATUS' => 'Trạng thái',
	'LBL_SUBJECT' => 'Chủ đề:',
	'LNK_IMPORT_NOTES' => 'Nhập ghi chú',
	'LNK_NEW_NOTE' => 'Tạo ghi chú hoặc đính kèm',
	'LNK_NOTE_LIST' => 'Xem ghi chú',
	'LNK_IMPORT_NOTES' => 'Nhập ghi chú',
	'LBL_MEMBER_OF' => 'Thành viên của:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Giao cho người dùng',
    'LBL_REMOVING_ATTACHMENT'=>'Đang xóa đính kèm...',
    'ERR_REMOVING_ATTACHMENT'=>'Failed to remove attachment...',
    'LBL_CREATED_BY'=>'Tạo bởi',
    'LBL_MODIFIED_BY'=>'Sửa bởi',
    'LBL_SEND_ANYWAYS'=> 'This email has no subject.  Send/save anyway?',
	'LBL_LIST_EDIT_BUTTON' => 'Sửa',
	'LBL_ACTIVITIES_REPORTS' => 'báo cáo hoạt động',
	'LBL_PANEL_DETAILS' => 'Chi tiết',
	'LBL_NOTE_INFORMATION' => 'Tổng quát',
	'LBL_MY_NOTES_DASHLETNAME' => 'Ghi chú của tôi',
	'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    //For export labels
	'LBL_FIRST_NAME' => 'tên',
    'LBL_LAST_NAME' => 'Họ',
    'LBL_EXPORT_PARENT_TYPE' => 'Liên quan đến module',
    'LBL_EXPORT_PARENT_ID' => 'Related To ID',
    'LBL_DATE_ENTERED' => 'Ngày tạo',
    'LBL_DATE_MODIFIED' => 'Ngày sửa',
    'LBL_DELETED' => 'Đã xóa',
);

?>