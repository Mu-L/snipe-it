<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Miền Active Directory',
    'ad_domain_help'			=> 'Đôi khi giống như tên miền email của bạn, nhưng không phải luôn luôn.',
    'ad_append_domain_label'    => 'Nối tên miền',
    'ad_append_domain'          => 'Nối tên miền với trường tên người dùng',
    'ad_append_domain_help'     => 'Người dùng không bắt buộc phải viết "username@domain.local", họ chỉ cần nhập "tên người dùng".',
    'admin_cc_email'            => 'Gửi thêm 1 bản email đến người khác',
    'admin_cc_email_help'       => 'Nếu bạn muốn gửi email nhận/trả tài sản đến người dùng vào tài khoản email bổ sung, nhập nó ở đây. Nếu không thì để trống trường này.',
    'admin_settings'            => 'Admin Settings',
    'is_ad'				        => 'Đây là một máy chủ Active Directory',
    'alerts'                	=> 'Cảnh báo',
    'alert_title'               => 'Update Notification Settings',
    'alert_email'				=> 'Gửi cảnh báo đến',
    'alert_email_help'    => 'Email addresses or distribution lists you want alerts to be sent to, comma separated',
    'alerts_enabled'			=> 'Bật Cảnh báo',
    'alert_interval'			=> 'Ngưỡng Cảnh báo Hết hạn (theo ngày)',
    'alert_inv_threshold'		=> 'Ngưỡng thông báo khoảng không quảng cáo',
    'allow_user_skin'           => 'Cho phép skin người dùng',
    'allow_user_skin_help_text' => 'Check ô này cho phép người dùng sử dụng giao diện bên ngoài.',
    'asset_ids'					=> 'ID tài sản',
    'audit_interval'            => 'Khoảng Kiểm toán',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date will be updated.',
    'audit_warning_days'        => 'Ngưỡng cảnh báo kiểm tra',
    'audit_warning_days_help'   => 'Bao nhiêu ngày trước chúng tôi nên cảnh báo bạn khi tài sản đến hạn kiểm toán?',
    'auto_increment_assets'		=> 'Generate auto-incrementing asset tags',
    'auto_increment_prefix'		=> 'Tiền tố (tùy chọn)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'					=> 'Sao lưu',
    'backups_help'              => 'Tạo, tải xuống, và khôi phục các dữ liệu ',
    'backups_restoring'         => 'Đang khôi phục từ bản sao lưu',
    'backups_clean' => 'Clean the backed-up database before restore',
    'backups_clean_helptext' => "This can be useful if you're changing between database versions",
    'backups_upload'            => 'Tải lên bản sao lưu',
    'backups_path'              => 'Những bản sao lưu trên máy chủ được lưu vào <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.)<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Các bản sao lưu quá lớn có thể đã hết thời gian khôi phục nhưng vẫn có thể chạy ở dạng lệnh. ',
    'barcode_settings'			=> 'Cài đặt mã vạch',
    'confirm_purge'			    => 'Xác nhận Xóa',
    'confirm_purge_help'		=> 'Nhập văn bản "DELETE" vào hộp bên dưới để xóa các bản ghi đã xóa của bạn. Không thể hoàn tác hành động này và sẽ xóa NGAY LẬP TỨC tất cả các mục và người dùng đã xóa-mềm. (Để an toàn bạn nên tạo một bản sao lưu trước)',
    'custom_css'				=> 'CSS tùy chỉnh',
    'custom_css_placeholder'	=> 'Add your custom CSS',
    'custom_css_help'			=> 'Nhập bất kỳ CSS tùy chỉnh. Không bao gồm thẻ &lt;style&gt;&lt;/style&gt.',
    'custom_forgot_pass_url'	=> 'Tùy chọn đường dẫn (URL) đặt lại mật khẩu',
    'custom_forgot_pass_url_help'	=> 'Điều này sẽ thay thế mật khẩu bị quên được xây dựng trong URL trên màn hình đăng nhập, hữu ích để trực tiếp người nội bộ hoặc lưu trữ mật khẩu LDAP đặt lại chức năng. Nó có hiệu quả sẽ vô hiệu hóa tính năng mật khẩu người dùng cục bộ bị lãng quên.',
    'dashboard_message'			=> 'Bảng tin nhắn',
    'dashboard_message_help'	=> 'Văn bản này sẽ xuất hiện trên các bảng điều khiển cho bất cứ ai với sự cho phép để xem các bảng điều khiển.',
    'default_currency'  		=> 'Tiền tệ mặc định',
    'default_eula_text'			=> 'EULA mặc định',
    'default_language'			=> 'Ngôn ngữ mặc định',
    'default_eula_help_text'	=> 'Bạn cũng có thể liên kế EULA tùy chỉnh đến danh mục tài sản riêng biệt.',
    'acceptance_note'           => 'Add a note for your decision (Optional)',
    'display_asset_name'        => 'Hiển thị tên tài sản',
    'display_checkout_date'     => 'Hiển thị ngày checkout',
    'display_eol'               => 'Hiển thị EOL ở bảng',
    'display_qr'                => 'Display 2D barcode',
    'display_alt_barcode'		=> 'Hiển thị mã vạch 1D',
    'barcode_type'				=> 'Loại mã vạch 2D',
    'alt_barcode_type'			=> 'Loại mã vạch 1D',
    'enabled'                   => 'Bật',
    'eula_settings'				=> 'Cài đặt EULA',
    'eula_markdown'				=> 'Đây là EULA cho phép <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Các loại tệp được chấp nhận là ico, png và gif. Các định dạng hình ảnh khác có thể không được hỗ trợ trong tất cả các trình duyệt.',
    'favicon_size'          => 'Biểu tượng yêu thích phải là hình ảnh vuông, 16x16 pixel.',
    'footer_text'               => 'Văn bản thêm chân ',
    'footer_text_help'          => 'Văn bản này sẽ xuất hiện trong chân trang bên phải. Liên kết được phép sử dụng <a href="https://help.github.com/articles/github-flavored-markdown/">Github mùi markdown</a>. Ngắt dòng, tiêu đề, hình ảnh, vv có thể dẫn đến kết quả không thể đoán trước.',
    'footer_text_placeholder'   => 'Optional footer text',
    'general_settings'			=> 'Cài đặt thường',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'			=> 'Tạo Sao lưu',
    'google_workspaces'         => 'Google Workspaces',
    'header_color'              => 'Màu Header',
    'info'                      => 'Các thiết lập này cho phép bạn tùy chỉnh một số khía cạnh của quá trình cài đặt.',
    'label_logo_size'           => 'Biểu trưng hình vuông ưa nhìn - sẽ được hiển thị ở trên cùng bên phải của mỗi nhãn nội dung. ',
    'laravel'                   => 'Phiên bản Laravel',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Nhóm quyền mặc định',
    'ldap_default_group_info'   => 'Select a group to assign to newly synced users. Remember that a user takes on the permissions of the group they are assigned.',
    'no_default_group'          => 'Không có nhóm mặc định',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client TLS Key',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'Bật LDAP',
    'ldap_integration'          => 'Tích hợp LDAP',
    'ldap_settings'             => 'Cài đặt LDAP',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
    'ldap_location'             => 'LDAP Location',
'ldap_location_help'             => 'The Ldap Location field should be used if <strong>an OU is not being used in the Base Bind DN.</strong> Leave this blank if an OU search is being used.',
    'ldap_login_test_help'      => 'Nhập một ngày hợp lệ LDAP tên người dùng và mật khẩu từ cơ sở DN bạn đã nêu trên để kiểm tra xem LDAP đăng nhập của bạn được cấu hình đúng. BẠN PHẢI LƯU THIẾT ĐẶT CẬP NHẬT LDAP CỦA BẠN ĐẦU TIÊN.',
    'ldap_login_sync_help'      => 'Này chỉ kiểm tra LDAP có thể đồng bộ một cách chính xác. Nếu truy vấn xác thực LDAP của bạn không đúng, người sử dụng vẫn không thể đăng nhập. BẠN PHẢI LƯU THIẾT ĐẶT CẬP NHẬT LDAP CỦA BẠN ĐẦU TIÊN.',
    'ldap_manager'              => 'Quản lý LDAP',
    'ldap_server'               => 'Máy chủ LDAP',
    'ldap_server_help'          => 'This should start with ldap:// (for unencrypted) or ldaps:// (for TLS or SSL)',
    'ldap_server_cert'			=> 'Xác thực giấy chứng nhận LDAP SSL',
    'ldap_server_cert_ignore'	=> 'Cho phép Chứng chỉ SSL không hợp lệ',
    'ldap_server_cert_help'		=> 'Chọn hộp kiểm này nếu bạn đang sử dụng chứng chỉ SSL ký tự và muốn chấp nhận chứng chỉ SSL không hợp lệ.',
    'ldap_tls'                  => 'Sử dụng TLS',
    'ldap_tls_help'             => 'Điều này chỉ nên được kiểm tra nếu bạn đang chạy STARTTLS trên máy chủ LDAP của mình.',
    'ldap_uname'                => 'LDAP Bind Username',
    'ldap_dept'                 => 'Phòng ban LDAP',
    'ldap_phone'                => 'Số điện thoại LDAP',
    'ldap_jobtitle'             => 'Chức danh LDAP',
    'ldap_country'              => 'Quốc gia LDAP',
    'ldap_pword'                => 'LDAP Bind Password',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'Bộ lọc LDAP',
    'ldap_pw_sync'              => 'Cache LDAP Passwords',
    'ldap_pw_sync_help'         => 'Uncheck this box if you do not wish to keep LDAP passwords cached as local hashed passwords. Disabling this means that your users may not be able to login if your LDAP server is unreachable for some reason.',
    'ldap_username_field'       => 'Trường tên người dùng',
    'ldap_lname_field'          => 'Họ',
    'ldap_fname_field'          => 'Tên LDAP',
    'ldap_auth_filter_query'    => 'Truy vấn xác thực LDAP',
    'ldap_version'              => 'Phiên bản LDAP',
    'ldap_active_flag'          => 'LDAP Active Flag',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_invert_active_flag'   => 'LDAP Invert Active Flag',
    'ldap_invert_active_flag_help'     => 'If enabled: when the value returned by LDAP Active Flag is <code>0</code> or <code>false</code> the user account will be active.',
    'ldap_emp_num'              => 'Số nhân viên LDAP',
    'ldap_email'                => 'Email LDAP',
    'ldap_test'                 => 'Kiểm tra LDAP',
    'ldap_test_sync'            => 'Kiểm tra đồng bộ LDAP',
    'license'                   => 'Bản quyền phần mềm',
    'load_remote'               => 'Load Remote Avatars',
    'load_remote_help_text'		=> 'Uncheck this box if your install cannot load scripts from the outside internet. This will prevent Snipe-IT from trying load avatars from Gravatar or other outside sources.',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'Địa chỉ IP',
    'login_success'             => 'Thành công?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => 'Lưu ý đăng nhập',
    'login_note_placeholder'            => "If you do not have a login or have found a device belonging to this company, please call technical support at 888-555-1212. Thank you.",
    'login_note_help'           => 'Tùy chọn bao gồm một vài câu trên màn hình đăng nhập của bạn, ví dụ để hỗ trợ những người đã tìm thấy thiết bị bị mất hoặc bị đánh cắp. Trường này chấp nhận <a href="https://help.github.com/articles/github-flavored-markdown/">Bài nhãn hiệu có hương vị cố định</a>',
    'login_remote_user_text'    => 'Tùy chọn đăng nhập người dùng từ xa',
    'login_remote_user_enabled_text' => 'Cho phép đăng nhập với người dùng từ xa',
    'login_remote_user_enabled_help' => 'Lựa chọn này cho phép REMOTE_USER xác thực từ xa "Thông qua cổng (rfc3875)',
    'login_common_disabled_text' => 'Vô hiệu hóa xác thực',
    'login_common_disabled_help' => 'Với tùy chọn này vô hiệu hóa các xác thực. Chỉ cần kích hoạt tùy chọn này nếu bạn chắc chắn rằng thông tin đăng nhập REMOTE_USER của bạn đã hoạt động',
    'login_remote_user_custom_logout_url_text' => 'Tùy chỉnh URL đăng xuất ',
    'login_remote_user_custom_logout_url_help' => 'Nếu một liên kết url được cung cấp ở đây, người dùng sẽ được chuyển hướng đến liên kết URL này sau khi người dùng đăng xuất khỏi Snipe-IT. Điều này hữu ích để đóng các phiên người dùng của nhà cung cấp Xác thực bạn một cách chính xác.',
    'login_remote_user_header_name_text' => 'Tùy chỉnh tiêu đề tên người dùng',
    'login_remote_user_header_name_help' => 'Sử dụng tiêu đề được chỉ định thay vì REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Dùng để in',
    'logo_print_assets_help'    => 'Sử dụng nhãn hiệu trên danh sách tài sản ',
    'full_multiple_companies_support_help_text' => 'Hạn chế người dùng (kể cả quản trị viên) được giao cho các công ty vào tài sản của công ty họ.',
    'full_multiple_companies_support_text' => 'Hỗ trợ nhiều công ty',
    'scope_locations_fmcs_support_text'  => 'Scope Locations with Full Multiple Companies Support',
    'scope_locations_fmcs_support_help_text'  => 'In previous versions, locations were not restricted to a particular company. If this setting is disabled, this preserves backward compatibility with older versions and locations can be used across multiple companies. If this setting is enabled, locations are restricted to their selected company.',
    'show_in_model_list'   => 'Hiển thị kiểu thả xuống',
    'optional'					=> 'tùy ý',
    'per_page'                  => 'Kết quả trên trang',
    'php'                       => 'Phiên bản PHP',
    'php_info'                  => 'PHP info',
    'php_overview'              => 'PHP',
    'php_overview_help'         => 'Thông tin Hệ thống PHP',
    'php_gd_info'               => 'Bạn phải cài đặt php-gd để hiển thị QR codes, xem cấu trúc cài đặt.',
    'php_gd_warning'            => 'PHP Image Processing và GD plugin thì CHƯA cài đặt.',
    'pwd_secure_complexity'     => 'Mật khẩu phức tạp',
    'pwd_secure_complexity_help' => 'Chọn bất kỳ quy tắc phức tạp về mật khẩu nào bạn muốn thực thi.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => 'Ký tự tối thiểu mật khẩu',
    'pwd_secure_min_help'       => 'Giá trị hợp lệ nhỏ nhất là 8',
    'pwd_secure_uncommon'       => 'Ngăn chặn mật khẩu thông thường',
    'pwd_secure_uncommon_help'  => 'Điều này sẽ không cho phép người dùng sử dụng mật khẩu thông thường từ 10.000 mật khẩu hàng đầu được báo cáo là vi phạm.',
    'qr_help'                   => 'Bật QR Code đầu tiên để gán cho nó',
    'qr_text'                   => 'Chuỗi QR Code',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML settings',
    'saml_enabled'              => 'Hữu hiệu hóa SAML',
    'saml_integration'          => 'Tích hợp SAML',
    'saml_sp_entityid'          => 'ID Pháp nhân',
    'saml_sp_acs_url'           => 'URL Dịch Vụ Xác Nhận Người Dùng (ACS)',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Công khai Chứng chỉ',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'saml_download'             => 'Download Metadata',
    'setting'                   => 'Cài đặt',
    'settings'                  => 'Cài đặt',
    'show_alerts_in_menu'       => 'Hiển thị thông báo trên top menu',
    'show_archived_in_list'     => 'Lưu trữ tài sản',
    'show_archived_in_list_text'     => 'Hiển thị tài sản lưu trữ trong danh sách "tất cả tài sản"',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Hiển thị ảnh trong email',
    'show_images_in_email_help'   => 'Bỏ chọn hộp này nếu cài đặt Snipe-IT của bạn nằm sau VPN hoặc mạng riêng tư và người dùng bên ngoài mạng sẽ không thể tải hình ảnh được cung cấp từ cài đặt này trong email của họ.',
    'site_name'                 => 'Tên trang web',
    'integrations'               => 'Integrations',
    'slack'                     => 'Slack',
    'general_webhook'           => 'General Webhook',
    'ms_teams'                  => 'Microsoft Teams',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Test to Save',
    'webhook_title'               => 'Update Webhook Settings',
    'webhook_help'                => 'Integration settings',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Channel',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Settings',
    'webhook_test'                 =>'Test :app integration',
    'webhook_integration_help'    => ':app integration is optional, however the endpoint and channel are required if you wish to use it. To configure :app integration, you must first <a href=":webhook_link" target="_new" rel="noopener">create an incoming webhook</a> on your :app account. Click on the <strong>Test :app Integration</strong> button to confirm your settings are correct before saving. ',
    'webhook_integration_help_button'    => 'Once you have saved your :app information, a test button will appear.',
    'webhook_test_help'           => 'Test whether your :app integration is configured correctly. YOU MUST SAVE YOUR UPDATED :app SETTINGS FIRST.',
    'shortcuts_enabled'         => 'Enable Shortcuts',
    'shortcuts_help_text'       => '<strong>Windows</strong>: Alt + Access key, <strong>Mac</strong>: Control + Option + Access key',
    'snipe_version'  			=> 'Phiên bản Snipe-IT',
    'support_footer'            => 'Hỗ trợ liên kết ở chân trang ',
    'support_footer_help'       => 'Chỉ định ai nhìn thấy các liên kết đến Thông tin người dùng và Hướng dẫn sử dụng Snipe-IT',
    'version_footer'            => 'Hiển thị phiên bản ở cuối trang ',
    'version_footer_help'       => 'Chỉ định ai xem phiên bản Snipe-IT và số bản dựng.',
    'system'                    => 'Thông tin hệ thống',
    'update'                    => 'Cập nhật cài đặt',
    'value'                     => 'Giá trị',
    'brand'                     => 'Xây dựng thương hiệu',
    'brand_help'                => 'Logo, Tên Website',
    'web_brand'                 => 'Loại Thương Hiệu Web',
    'about_settings_title'      => 'Giới thiệu Cài đặt',
    'about_settings_text'       => 'Các cài đặt này cho phép bạn tuỳ chỉnh các khía cạnh nhất định trong quá trình cài đặt của bạn.',
    'labels_per_page'           => 'Nhãn trên mỗi trang',
    'label_dimensions'          => 'Kích thước nhãn (inch)',
    'next_auto_tag_base'        => 'Tiếp theo tự động tăng',
    'page_padding'              => 'Lề trang (inch)',
    'privacy_policy_link'       => 'Đi đến Nội Quy - Quy Định',
    'privacy_policy'            => 'Nội quy - Quy định',
    'privacy_policy_link_help'  => 'Nếu một liên kết url được ghi ở đây, một liên kết đến chính sách bảo mật của bạn sẽ bao gồm trong phần chân trang của ứng dụng trong bất kỳ email nào mà hệ thống gửi đi, tuân thủ GDPR. ',
    'purge'                     => 'Xóa các bản ghi đã xóa',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => 'Nhãn máng đáy',
    'labels_display_sgutter'    => 'Nhãn máng xối',
    'labels_fontsize'           => 'Kích thước phông chữ nhãn',
    'labels_pagewidth'          => 'Chiều rộng nhãn nhãn',
    'labels_pageheight'         => 'Chiều cao tấm nhãn',
    'label_gutters'        => 'Khoảng cách nhãn (inch)',
    'page_dimensions'        => 'Kích thước trang (inch)',
    'label_fields'          => 'Gắn nhãn các lĩnh vực hiển thị',
    'inches'        => 'inch',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Liên kết đến Snipe-IT trong email',
    'show_url_in_emails_help_text'      => 'Bỏ chọn hộp này nếu bạn không muốn liên kết lại với cài đặt Snipe-IT của mình trong phần chân trang email. Có ích nếu hầu hết người dùng của bạn không đăng nhập.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Chiều cao thu nhỏ tối đa',
    'thumbnail_max_h_help'   => 'Chiều cao tối đa bằng pixel mà hình thu nhỏ có thể hiển thị trong chế độ xem danh sách. Tối thiểu 25, tối đa 500.',
    'two_factor'        => 'Xác thực hai nhân tố',
    'two_factor_secret'        => 'Mã số hai nhân tố',
    'two_factor_enrollment'        => 'Đăng ký Hai nhân tố',
    'two_factor_enabled_text'        => 'Kích hoạt hai yếu tố',
    'two_factor_reset'        => 'Đặt lại Hai yếu tố bí mật',
    'two_factor_reset_help'        => 'This will force the user to enroll their device with their authenticator app again. This can be useful if their currently enrolled device is lost or stolen. ',
    'two_factor_reset_success'          => 'Thiết lập thành công hai yếu tố',
    'two_factor_reset_error'          => 'Thiết lập lại thiết bị hai yếu tố không thành công',
    'two_factor_enabled_warning'        => 'Bật hai yếu tố nếu hiện tại không được bật sẽ buộc bạn phải xác thực ngay lập tức bằng thiết bị được đăng ký Google Auth. Bạn sẽ có khả năng đăng ký thiết bị của bạn nếu một trong số đó hiện không đăng ký.',
    'two_factor_enabled_help'        => 'Điều này sẽ bật xác thực hai yếu tố bằng Google Authenticator.',
    'two_factor_optional'        => 'Chọn lọc (Người dùng có thể bật hoặc tắt nếu được phép)',
    'two_factor_required'        => 'Bắt buộc cho tất cả người dùng',
    'two_factor_disabled'        => 'Tàn tật',
    'two_factor_enter_code'	=> 'Nhập mã số hai nhân tố',
    'two_factor_config_complete'	=> 'Gửi Mã',
    'two_factor_enabled_edit_not_allowed' => 'Quản trị viên của bạn không cho phép bạn chỉnh sửa cài đặt này.',
    'two_factor_enrollment_text'	=> "Yêu cầu xác thực hai yếu tố, tuy nhiên thiết bị của bạn chưa được đăng ký. Mở ứng dụng Google Authenticator của bạn và quét mã QR dưới đây để đăng ký thiết bị của bạn. Khi bạn đã đăng ký thiết bị của mình, hãy nhập mã dưới đây",
    'require_accept_signature'      => 'Yêu cầu Chữ ký',
    'require_accept_signature_help_text'      => 'Bật tính năng này sẽ yêu cầu người dùng đăng ký về việc chấp nhận nội dung.',
    'require_checkinout_notes'  => 'Require Notes on Checkin/Checkout',
    'require_checkinout_notes_help_text'    => 'Enabling this feature will require the note fields to be populated when checking in or checking out an asset.',
    'left'        => 'trái',
    'right'        => 'đúng',
    'top'        => 'hàng đầu',
    'bottom'        => 'đáy',
    'vertical'        => 'theo chiều dọc',
    'horizontal'        => 'ngang',
    'unique_serial'                => 'Duy nhất một Số sê-ri',
    'unique_serial_help_text'                => 'Chọn hộp này các chuỗi tài sản có một mã duy nhất',
    'zerofill_count'        => 'Chiều dài của các thẻ thuộc tính, bao gồm zerofill',
    'username_format_help'   => 'Cài đặt này sẽ chỉ được sử dụng bởi quá trình import nếu tên người dùng không được cung cấp và chúng tôi sẽ tạo tên người dùng cho bạn.',
    'oauth_title' => 'OAuth API Settings',
    'oauth_clients' => 'OAuth Clients',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint Settings',
    'oauth_no_clients' => 'You have not created any OAuth clients yet.',
    'oauth_secret' => 'Secret',
    'oauth_authorized_apps' => 'Authorized Applications',
    'oauth_redirect_url' => 'Redirect URL',
    'oauth_name_help' => ' Something your users will recognize and trust.',
    'oauth_scopes' => 'Scopes',
    'oauth_callback_url' => 'Your application authorization callback URL.',
    'create_client' => 'Create Client',
    'no_scopes' => 'No scopes',
    'asset_tag_title' => 'Update Asset Tag Settings',
    'barcode_title' => 'Cập nhật cài đặt mã vạch',
    'barcodes' => 'Mã vạch',
    'barcodes_help_overview' => 'Barcode &amp; QR settings',
    'barcodes_help' => 'This will attempt to delete cached barcodes. This would typically only be used if your barcode settings have changed, or if your Snipe-IT URL has changed. Barcodes will be re-generated when accessed next.',
    'barcodes_spinner' => 'Attempting to delete files...',
    'barcode_delete_cache' => 'Delete Barcode Cache',
    'branding_title' => 'Update Branding Settings',
    'general_title' => 'Update General Settings',
    'mail_test' => 'Send Test',
    'mail_test_help' => 'This will attempt to send a test mail to :replyto.',
    'filter_by_keyword' => 'Filter by setting keyword',
    'security' => 'Security',
    'security_title' => 'Update Security Settings',
    'security_help' => 'Two-factor, Password Restrictions',
    'groups_help' => 'Account permission groups',
    'localization' => 'Quốc gia',
    'localization_title' => 'Update Localization Settings',
    'localization_help' => 'Language, date display',
    'notifications' => 'Notifications',
    'notifications_help' => 'Email Alerts & Audit Settings',
    'asset_tags_help' => 'Incrementing and prefixes',
    'labels' => 'Nhãn',
    'labels_title' => 'Update Label Settings',
    'labels_help' => 'Barcodes &amp; label settings',
    'purge_help' => 'Xóa các bản ghi đã xóa',
    'ldap_extension_warning' => 'It does not look like the LDAP extension is installed or enabled on this server. You can still save your settings, but you will need to enable the LDAP extension for PHP before LDAP syncing or login will work.',
    'ldap_ad' => 'LDAP/AD',
    'ldap_test_label' => 'Test LDAP Sync',
    'ldap_test_login' => ' Test LDAP Login',
    'ldap_username_placeholder' => 'LDAP Username',
    'ldap_password_placeholder' => 'LDAP Password',
    'employee_number' => 'Mã số nhân viên',
    'create_admin_user' => 'Tạo người dùng ::',
    'create_admin_success' => 'Success! Your admin user has been added!',
    'create_admin_redirect' => 'Click here to go to your app login!',
    'setup_migrations' => 'Database Migrations ::',
    'setup_no_migrations' => 'There was nothing to migrate. Your database tables were already set up!',
    'setup_successful_migrations' => 'Your database tables have been created',
    'setup_migration_output' => 'Migration output:',
    'setup_migration_create_user' => 'Next: Create User',
    'ldap_settings_link' => 'LDAP Settings Page',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integration',
    'status_label_name' => 'Status Label Name',
    'super_admin_only'  => 'Super Admin Only',
    'label2_enable'           => 'New Label Engine',
    'label2_enable_help'      => 'Switch to the new label engine. <b>Note: You will need to save this setting before setting others.</b>',
    'label2_template'         => 'Template',
    'label2_template_help'    => 'Select which template to use for label generation',
    'label2_title'            => 'Tiêu đề',
    'label2_title_help'       => 'The title to show on labels that support it',
    'label2_title_help_phold' => 'The placeholder <code>{COMPANY}</code> will be replaced with the asset&apos;s company name',
    'label2_asset_logo'       => 'Use Asset Logo',
    'label2_asset_logo_help'  => 'Use the logo of the asset&apos;s assigned company, rather than the value at <code>:setting_name</code>',
    'label2_1d_type'          => '1D Barcode Type',
    'label2_1d_type_help'     => 'Format for 1D barcodes',
    'label2_2d_type'          => 'Loại mã vạch 2D',
    'label2_2d_type_help'     => 'Format for 2D barcodes',
    'label2_2d_target'        => '2D Barcode Target',
    'label2_2d_target_help'   => 'The data that will be contained in the 2D barcode',
    'label2_fields'           => 'Field Definitions',
    'label2_fields_help'      => 'Fields can be added, removed, and reordered in the left column. For each field, multiple options for Label and DataSource can be added, removed, and reordered in the right column.',
    'purge_barcodes' => 'Purge Barcodes',
    'help_asterisk_bold'    => 'Text entered as <code>**text**</code> will be displayed as bold',
    'help_blank_to_use'     => 'Leave blank to use the value from <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> will use the value from <code>:setting_name</code>. <br>Note that the value of the barcodes must comply with the respective barcode spec in order to be successfully generated. Please see <a href="https://snipe-it.readme.io/docs/barcodes">the documentation <i class="fa fa-external-link"></i></a> for more details. ',
    'asset_id'              => 'Asset ID',
    'data'               => 'Data',
    'default'               => 'Default',
    'none'                  => 'None',
    'google_callback_help' => 'This should be entered as the callback URL in your Google OAuth app settings in your organization&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">Google developer console <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Google Workspace Login Settings',
    'enable_google_login'  => 'Enable users to login with Google Workspace',
    'enable_google_login_help'  => 'Users will not be automatically provisioned. They must have an existing account here AND in Google Workspace, and their username here must match their Google Workspace email address. ',
    'mail_reply_to' => 'Mail Reply-To Address',
    'mail_from' => 'Mail From Address',
    'database_driver' => 'Database Driver',
    'bs_table_storage' => 'Table Storage',
    'timezone' => 'Timezone',
    'test_mail' => 'Test Mail',
    'profile_edit'          => 'Edit Profile',
    'profile_edit_help'          => 'Allow users to edit their own profiles.',
    'default_avatar' => 'Custom Default Avatar',
    'default_avatar_help' => 'This image will be displayed as a profile if a user does not have a profile photo.',
    'restore_default_avatar' => 'Restore <a href=":default_avatar" data-toggle="lightbox" data-type="image">original system default avatar</a>',
    'restore_default_avatar_help' => '',
    'due_checkin_days' => 'Due For Checkin Warning',
    'due_checkin_days_help' => 'How many days before the expected checkin of an asset should it be listed in the "Due for checkin" page?',
    'no_groups' => 'No groups have been created yet. Visit <code>Admin Settings > Permission Groups</code> to add one.',
    'text' => 'Text',

    'username_formats' => [
        'username_format'		=> 'Định dạng Tên người dùng',
        'firstname_lastname_format'	=> 'Họ Tên Họ (jane.smith)',
        'first_name_format'	        => 'First Name (jane)',
        'last_name_format'		=> 'Last Name (doe)',
        'filastname_format'			=> 'First Initial Last Name (jsmith)',
        'lastnamefirstinitial_format' =>  'Last Name First Initial (smithj)',
        'firstname_lastname_underscore_format' => 'First Name Last Name (jane_smith)',
        'firstinitial.lastname' => 'First Initial Last Name (j.smith)',
        'lastname_firstinitial' => 'Last Name First Initial (smith_j)',
        'lastname_dot_firstinitial_format' => 'Last Name First Initial (smith.j)',
        'firstnamelastname'     => 'First Name Last Name (janesmith)',
        'firstnamelastinitial'  => 'First Name Last Initial (janes)',
        'lastnamefirstname'      => 'Last Name.First Name (smith.jane)',
    ],

    'email_formats' => [
        'email_format'			=> 'Định dạng Email',
        'firstname_lastname_format'	=> 'Họ Tên Họ (jane.smith@example.com)',
        'first_name_format'		=> 'Tên (jane@example.com)',
        'last_name_format'		=> 'Last Name (doe@example.com)',
        'filastname_format'			=> 'Tên Họ Tên Đầu tiên (jsmith@example.com)',
        'lastnamefirstinitial_format' =>  'Tên của bạn (smithj@example.com)',
        'firstname_lastname_underscore_format' => 'Tên họ (jane_smith@example.com)',
        'firstinitial.lastname' => 'Tên trước Họ sau (j.smith@example.com)',
        'lastname_firstinitial' => 'Họ trước Tên sau (smith_j@example.com)',
        'lastname_dot_firstinitial_format' => 'Last Name First Initial (smith.j@example.com)',
        'firstnamelastname'     => 'Tên Họ (jane_smith@example.com)',
        'firstnamelastinitial'  => 'Tên Họ Viết tắt (janes@example.com)',
        'lastnamefirstname'      => 'Last Name.First Name (smith.jane@example.com)',
    ],



    'logo_labels' => [
        'acceptance_pdf_logo'       => 'PDF Logo',
        'email_logo'                => 'Email Logo',
        'label_logo'                => 'Nhãn Logo',
        'logo'                      => 'Site Logo',
        'favicon'                   => 'Favicon',
    ],

    'logo_help' => [
        'email_logo_size'       => 'Biểu trưng vuông trong email ưa nhìn. ',
    ],

    'logo_option_types' => [
        'text' => 'Text',
        'logo' => 'Logo',
        'logo_and_text' => 'Logo and Text',
    ],



    /* Keywords for settings overview help */
    'keywords' => [
        'brand'             => 'footer, logo, print, theme, skin, header, colors, color, css',
        'general_settings'  => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula, gravatar, tos, dashboard, privacy',
        'groups'            => 'permissions, permission groups, authorization',
        'labels'            => 'labels, barcodes, barcode, sheets, print, upc, qr, 1d, 2d',
        'localization'      => 'localization, currency, local, locale, time zone, timezone, international, internatinalization, language, languages, translation',
        'php_overview'      => 'phpinfo, system, info',
        'purge'             => 'xóa vĩnh viễn',
        'security'          => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    ],

];
