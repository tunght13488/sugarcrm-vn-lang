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
	//module
	'LBL_MODULE_NAME' => 'Tài liệu',
	'LBL_MODULE_TITLE' => 'tài liệu : Trang chủ',
	'LNK_NEW_DOCUMENT' => 'Tạo tài liệu mới',
	'LNK_DOCUMENT_LIST'=> 'Xem tài liệu',
	'LBL_DOC_REV_HEADER' => 'Phiên bản tài liệu',
	'LBL_SEARCH_FORM_TITLE'=> 'Tìm kiếm tài liệu',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'Document ID',
	'LBL_NAME' => 'Tên tài liệu',
	'LBL_DESCRIPTION' => 'Mô tả',
	'LBL_CATEGORY' => 'Thể loại',
	'LBL_SUBCATEGORY' => 'Phân mục',
	'LBL_STATUS' => 'Trạng thái',
	'LBL_CREATED_BY'=> 'Tạo bởi',
	'LBL_DATE_ENTERED'=> 'Ngày tạo',
	'LBL_DATE_MODIFIED'=> 'Ngày sửa',
	'LBL_DELETED' => 'Đã xóa',
	'LBL_MODIFIED'=> 'Modified by ID',
	'LBL_MODIFIED_USER' => 'Sửa bởi',
	'LBL_CREATED'=> 'Tạo bởi',
	'LBL_REVISIONS'=>'Phiên bản',
	'LBL_RELATED_DOCUMENT_ID'=>'Related Document ID',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'Related Document Revision ID',
	'LBL_IS_TEMPLATE'=>'Có phải là tài liệu mẫu',
	'LBL_TEMPLATE_TYPE'=>'Kiểu tài liệu',
	'LBL_ASSIGNED_TO_NAME'=>'Giao cho:',
	'LBL_REVISION_NAME' => 'Số phiên bản',
	'LBL_MIME' => 'Mime ',
	'LBL_REVISION' => 'Phiên bản',
	'LBL_DOCUMENT' => 'tài liệu liên quan',
	'LBL_LATEST_REVISION' => 'Phiên bản mới nhất',
	'LBL_CHANGE_LOG'=> 'Nhật ký thay đổi',
	'LBL_ACTIVE_DATE'=> 'Ngày phát hành',
	'LBL_EXPIRATION_DATE' => 'Ngày hết hạn',
	'LBL_FILE_EXTENSION'  => 'File mở rộng',
	'LBL_LAST_REV_MIME_TYPE' => 'Phiên bản MIME mới nhất',
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Chưa đặc tả',
    'LBL_HOMEPAGE_TITLE' => 'Tài liệu của tôi',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Tài liệu mới',
	//document edit and detail view
	'LBL_DOC_NAME' => 'tên tài liệu:',
	'LBL_FILENAME' => 'tên file:',
	'LBL_LIST_FILENAME' => 'File:',
	'LBL_DOC_VERSION' => 'Phiên bản:',
	'LBL_FILE_UPLOAD' => 'File:',

	'LBL_CATEGORY_VALUE' => 'Thể loại:',
	'LBL_LIST_CATEGORY' => 'Thể loại',
	'LBL_SUBCATEGORY_VALUE'=> 'Phân mục:',
	'LBL_DOC_STATUS'=> 'Trạng thái:',
	'LBL_LAST_REV_CREATOR' => 'Phiên bản tạo bởi:',
	'LBL_LASTEST_REVISION_NAME' => 'Phiên bản mới nhất:',
	'LBL_SELECTED_REVISION_NAME' => 'Phiên bản được chọn:',
	'LBL_CONTRACT_STATUS' => 'Trạng thái hợp đồng:',
	'LBL_CONTRACT_NAME' => 'tên hợp đồng:',
	'LBL_LAST_REV_DATE' => 'Ngày phiên bản:',
	'LBL_DOWNNLOAD_FILE'=> ' File tải về:',
	'LBL_DET_RELATED_DOCUMENT'=>'Tài liệu liên quan:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Phiên bản tài liệu liên quan:",
	'LBL_DET_IS_TEMPLATE'=>'là mẫu? :',
	'LBL_DET_TEMPLATE_TYPE'=>'Kiểu tài liệu:',
	'LBL_DOC_DESCRIPTION'=>'Mô tả:',
	'LBL_DOC_ACTIVE_DATE'=> 'Ngày phát hành:',
	'LBL_DOC_EXP_DATE'=> 'Ngày hết hạn:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Danh sách tài liệu',
	'LBL_LIST_DOCUMENT' => 'Tài liệu',
	'LBL_LIST_CATEGORY' => 'Thể loại',
	'LBL_LIST_SUBCATEGORY' => 'Phân mục',
	'LBL_LIST_REVISION' => 'Phiên bản',
	'LBL_LIST_LAST_REV_CREATOR' => 'Phát hành bởi',
	'LBL_LIST_LAST_REV_DATE' => 'Phiên bản ngày',
	'LBL_LIST_VIEW_DOCUMENT'=>'Xem',
    'LBL_LIST_DOWNLOAD'=> 'Tải về',
	'LBL_LIST_ACTIVE_DATE' => 'Ngày phát hành',
	'LBL_LIST_EXP_DATE' => 'Ngày hết hạn',
	'LBL_LIST_STATUS'=>'Trạng thái',
	'LBL_LINKED_ID' => 'Liên kết id',
	'LBL_SELECTED_REVISION_ID' => 'Phiên bản liên quan id',
	'LBL_LATEST_REVISION_ID' => 'Latest revision id',
	'LBL_SELECTED_REVISION_FILENAME' => 'tên file phiên bản được chọn',
	'LBL_FILE_URL' => 'File url',
    'LBL_REVISIONS_PANEL' => 'Chi tiết phiên bản',
    'LBL_REVISIONS_SUBPANEL' => 'Phiên bản',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Tên tài liệu:',
	'LBL_SF_CATEGORY' => 'Thể loại:',
	'LBL_SF_SUBCATEGORY'=> 'Phân mục:',
	'LBL_SF_ACTIVE_DATE' => 'Ngày phát hành:',
	'LBL_SF_EXP_DATE'=> 'Ngày hết hạn:',

	'DEF_CREATE_LOG' => 'Tài liệu được tạo',

	//error messages
	'ERR_DOC_NAME'=>'Tên tài liệu',
	'ERR_DOC_ACTIVE_DATE'=>'Ngày phát hành',
	'ERR_DOC_EXP_DATE'=> 'Ngày hết hạn',
	'ERR_FILENAME'=> 'tên File ',
	'ERR_DOC_VERSION'=> 'Phiên bản tài liệu',
	'ERR_DELETE_CONFIRM'=> 'Bạn có muốn xóa phiên bản tài liệu?',
	'ERR_DELETE_LATEST_VERSION'=> 'bạn không được xóa phiên bản mới nhất.',
	'LNK_NEW_MAIL_MERGE' => 'Mail đồng bộ',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Mail mẫu đồng bộ:',
	'ERR_MISSING_FILE' => 'Tài liệu này thiếu file đính kèm.',

	'LBL_TREE_TITLE' => 'Tài liệu',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'tên',
	'LBL_CONTRACT_NAME'=>'Tên hợp đồng:',
	'LBL_LIST_IS_TEMPLATE'=>'Là mẫu?',
	'LBL_LIST_TEMPLATE_TYPE'=>'Kiểu tài liệu',
	'LBL_LIST_SELECTED_REVISION'=>'Phiên bản được chọn',
	'LBL_LIST_LATEST_REVISION'=>'Phiên bản mới nhất',
	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Hợp đồng liên quan',
	'LBL_LAST_REV_CREATE_DATE'=>'Ngày tạo phiên bản mới nhất',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
    'LBL_CONTRACTS' => 'Hợp đồng',
    'LBL_CREATED_USER' => 'tạo bởi',
    'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Phiên bản',
    'LBL_DOCUMENT_INFORMATION' => 'Tổng quan',
	'LBL_DOC_ID' => 'Document Source ID',
	'LBL_DOC_TYPE' => 'Nguồn',
	'LBL_LIST_DOC_TYPE' => 'Nguồn',
    'LBL_DOC_TYPE_POPUP' => 'Chọn nguồn tài liệu sẽ được tài lên<br> Và chúng được để ở đâu.',
	'LBL_DOC_URL' => 'Nguồn tài liệu URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Tên File ',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => '20 tài liệu được chỉnh sửa gần đây nhất.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'tên File ',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'The user attempted to access an invalid external API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'The login check failed for external API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Tài khoản',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Liên hệ',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Cơ hội',
    'LBL_CASES_SUBPANEL_TITLE' => 'Kịch bản',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Quotes',
	'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Sản phẩm',
);


?>
