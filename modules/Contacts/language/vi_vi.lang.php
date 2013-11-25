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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'Specify the record number to delete the contact.',
    'LBL_ACCOUNT_ID' => 'Account ID:',
    'LBL_ACCOUNT_NAME' => 'Tên tài khoản:',
    'LBL_CAMPAIGN'     => 'Chiến dịch:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Hoạt động',
    'LBL_ADD_BUSINESSCARD' => 'Nhập thẻ kinh doanh',
    'LBL_ADDMORE_BUSINESSCARD' => 'Thêm thẻ khác',
    'LBL_ADDRESS_INFORMATION' => 'Địa chỉ',
    'LBL_ALT_ADDRESS_CITY' => 'Địa chỉ thành phố khác:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Địa chỉ quốc gia khác:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Địa chỉ Postal Code:',
    'LBL_ALT_ADDRESS_STATE' => 'Địa chỉ thành phố khác:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Địa chỉ đường phố khác 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Địa chỉ đường phố khác 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Địa chỉ đường phố khác:',
    'LBL_ALTERNATE_ADDRESS' => 'Địa chỉ khác:',
    'LBL_ALT_ADDRESS' => 'Địa chỉ khác:',
    'LBL_ANY_ADDRESS' => 'Bất kỳ địa chỉ nào:',
    'LBL_ANY_EMAIL' => 'Bất kỳ email nào:',
    'LBL_ANY_PHONE' => 'bất kỳ điện thoại nào:',
    'LBL_ASSIGNED_TO_NAME' => 'Đã giao cho:',
    'LBL_ASSIGNED_TO_ID' => 'Đã giao cho người dùng',
    'LBL_ASSISTANT_PHONE' => 'Điện thoại trợ lý:',
    'LBL_ASSISTANT' => 'Trợ lý:',
    'LBL_BIRTHDATE' => 'Ngày sinh:',
    'LBL_BUSINESSCARD' => 'Thẻ kinh doanh',
    'LBL_CITY' => 'Thành phố:',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_CONTACT_INFORMATION' => 'Tổng quan',
    'LBL_CONTACT_NAME' => 'Tên liên hệ:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Liên hệ- Cơ hội:',
    'LBL_CONTACT_ROLE' => 'Quyền:',
    'LBL_CONTACT' => 'Liên hệ:',
    'LBL_COUNTRY' => 'Quốc gia:',
    'LBL_CREATED_ACCOUNT' => 'tạo tài khoản mới',
    'LBL_CREATED_CALL' => 'tạo cuộc gọi mới',
    'LBL_CREATED_CONTACT' => 'tạo liên hệ mới',
    'LBL_CREATED_MEETING' => 'Tạo cuộc họp mới',
    'LBL_CREATED_OPPORTUNITY' =>'Tạo cơ hội mới',
    'LBL_DATE_MODIFIED' => 'Ngày chỉnh sửa:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Liên hệ',
    'LBL_DEPARTMENT' => 'Phòng ban:',
    'LBL_DESCRIPTION_INFORMATION' => 'Thông tin mô tả',
    'LBL_DESCRIPTION' => 'mô tả:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE'=>'Báo cáo trực tiếp',
    'LBL_DO_NOT_CALL' => 'Không gọi điện:',
    'LBL_DUPLICATE' => 'Trùng lặp liên hệ',
    'LBL_EMAIL_ADDRESS' => 'Địa chỉ mail:',
    'LBL_EMAIL_OPT_OUT' => 'Email bị từ chối:',
    'LBL_EXISTING_ACCOUNT' => 'Đã dùng tài khoản này',
    'LBL_EXISTING_CONTACT' => 'Đã dùng tài khoản này',
    'LBL_EXISTING_OPPORTUNITY'=> 'Đã dùng cơ hội này',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'tên:',
    'LBL_FULL_NAME' => 'Tên đầy đủ:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'lịch sử',
    'LBL_HOME_PHONE' => 'Trang chủ:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Nhập vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Tự động tạo liên hệ từ VCard.',
    'LBL_INVALID_EMAIL'=>' Email không hợp lệ:',
    'LBL_INVITEE' => 'báo cáo trực tiếp cho',
    'LBL_LAST_NAME' => 'Họ:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Trạng thái chấp nhận',
    'LBL_LIST_ACCOUNT_NAME' => 'Tên tài khoản',
    'LBL_LIST_CONTACT_NAME' => 'tên tài khoản',
    'LBL_LIST_CONTACT_ROLE' => 'Quyền',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Tên',
    'LBL_LIST_FORM_TITLE' => 'Danh sách liên hệ',
    'LBL_VIEW_FORM_TITLE' => 'Xem danh sách',
    'LBL_LIST_LAST_NAME' => 'họ',
    'LBL_LIST_NAME' => 'Tên',
    'LBL_LIST_OTHER_EMAIL_ADDRESS' => ' Email khác',
    'LBL_LIST_PHONE' => 'Điện thoại văn phòng',
    'LBL_LIST_TITLE' => 'Chức vụ',
    'LBL_MOBILE_PHONE' => 'Điện thoại:',
    'LBL_MODIFIED' => 'Chỉnh sửa bởi:',
    'LBL_MODULE_NAME' => 'Liên hệ',
    'LBL_MODULE_TITLE' => 'Liên hệ: Trang chủ',
    'LBL_NAME' => 'tên:',
    'LBL_NEW_FORM_TITLE' => 'Liên hệ mới',
    'LBL_NEW_PORTAL_PASSWORD' => 'New Portal Password:',
    'LBL_NOTE_SUBJECT' =>'Chủ đề Ghi chú',
    'LBL_OFFICE_PHONE' => 'Điện thoại văn phòng:',
    'LBL_OPP_NAME' => 'tên cơ hội:',
    'LBL_OPPORTUNITY_ROLE_ID'=>'Opportunity Role ID:',
    'LBL_OPPORTUNITY_ROLE'=>'Quyền của cơ hội',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email khác:',
    'LBL_OTHER_PHONE' => 'Điện thoại khác:',
    'LBL_PHONE' => 'Điện thoại:',
    'LBL_PORTAL_ACTIVE' => 'Portal Active:',
    'LBL_PORTAL_APP'=>'Portal Application:',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Portal Password is Set:',
  
  'LBL_STREET' => 'Đường phố',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Thành phố chính:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Quốc gia  chính:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Postal Code:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'tỉnh  chính:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Đường phố chính 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Đường phố chính 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Đường phố chính:',
    'LBL_PRIMARY_ADDRESS' => 'Địa chỉ chính:',
    'LBL_PRODUCTS_TITLE'=>'Sản phẩm',
    'LBL_RELATED_CONTACTS_TITLE'=>'Liên hệ liên quan',
    'LBL_REPORTS_TO_ID'=>'Reports to ID:',
    'LBL_REPORTS_TO' => 'Báo cáo cho:',
    'LBL_RESOURCE_NAME' => 'Resource Name',
    'LBL_SALUTATION' => 'Chào mừng:',
    'LBL_SAVE_CONTACT' => 'Lưu liên hệ',
    'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm liên hệ',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Liên hệ được chọn',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Liên hệ được chọn',
    'LBL_STATE' => 'Tỉnh:',
    'LBL_SYNC_CONTACT' => 'Sync to Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Danh sách triển vọng',
    'LBL_TITLE' => 'Chức vụ:',
    'LNK_CONTACT_LIST' => 'Xem liên hệ',
    'LNK_IMPORT_VCARD' => 'Tạo Liên hệ từ vCard',
    'LNK_NEW_ACCOUNT' => 'tạo tài khoản',
    'LNK_NEW_APPOINTMENT' => 'tạo cuộc gặp',
    'LNK_NEW_CALL' => 'Nhật ký cuộc gọi',
    'LNK_NEW_CASE' => 'Tạo kịch bản',
    'LNK_NEW_CONTACT' => 'Tạo Liên hệ',
    'LNK_NEW_EMAIL' => 'Soạn Email',
    'LNK_NEW_MEETING' => 'lịch họp',
    'LNK_NEW_NOTE' => 'Tạo ghi chú',
    'LNK_NEW_OPPORTUNITY' => 'Tạo cơ hội',
    'LNK_NEW_TASK' => 'Tạo công việc',
    'LNK_SELECT_ACCOUNT' => "Select Account",
	'MSG_DUPLICATE' => 'Dữ liệu trùng lặp. Contact records containing similar names are listed below.<br>Click Create Contact to continue creating this new contact, or select an existing contact listed below.',
	'MSG_SHOW_DUPLICATES' => 'Dữ liệu trùng lặp. Contact records containing similar names are listed below.<br>Click Save to continue creating this new contact, or click Cancel to return to the module without creating the contact.',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Đưa địa chỉ phụ thành địa chỉ chính',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Đưa địa chỉ chính thành địa chỉ phụ',
    'NTC_DELETE_CONFIRMATION' => 'Bạn có chắc muốn xóa?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Tạo 1 cơ hội yêu cầu một tài khoản.\n Please either create a new account or select an existing one.',
    'NTC_REMOVE_CONFIRMATION' => 'Bạn có muốn xóa liên hệ từ kịch bản này?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Bạn có muốn xóa báo cáo này?',

	'LBL_USER_PASSWORD' => 'Mật khẩu:',

	'LBL_LEADS_SUBPANEL_TITLE' => 'Khách hàng tiềm năng',
	'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Cơ hội',
	'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'tài liệu',
	'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Sao chép đến địa chỉ chính',
	'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Sao chép đến địa chỉ khác',

	'LBL_CASES_SUBPANEL_TITLE' => 'Kịch bản',
	'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
	'LBL_PROJECTS_SUBPANEL_TITLE' => 'Dự án',
    'LBL_PROJECTS_RESOURCES' => 'Tài nguyên dự án',
	'LBL_TARGET_OF_CAMPAIGNS' => 'Chiến dịch (Mục tiêu của) :',
	'LBL_CAMPAIGNS'	=>	'Chiến dịch',
	'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'Chiến dịch',
	'LBL_LIST_CITY' => 'Thành phố',
	'LBL_LIST_STATE' => 'Tỉnh',
	'LBL_HOMEPAGE_TITLE' => 'Liên hệ của tôi',
    'LBL_OPPORTUNITIES' => 'Cơ hội',

	'LBL_CHECKOUT_DATE'=>'Kiểm tra ngày ',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Liên hệ',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Dự án',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Chiến dịch',
    'LNK_IMPORT_CONTACTS' => 'Xuất liên hệ',

    //For export labels
    'LBL_PHONE_HOME' => 'Điện thoại nhà',
    'LBL_PHONE_MOBILE' => 'Di động',
    'LBL_PHONE_WORK' => 'Điện thoại văn phòng',
    'LBL_PHONE_OTHER' => 'Điện thoại khác',
    'LBL_PHONE_FAX' => 'Phone Fax',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',

    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Đã giao người dùng',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigned User ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modified By ID',
    'LBL_EXPORT_CREATED_BY' => 'Created By ID',
    'LBL_EXPORT_PHONE_HOME' => 'Điện thoại nhà',
    'LBL_EXPORT_PHONE_MOBILE' => 'Di động',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Liên quan đến liên hệ\' Emails',
    'LBL_USER_SYNC' => 'User Sync'
)
?>
