<?php

return [
    'ad'				        => 'Eolaire Gníomhach',
    'ad_domain'				    => 'Fearann ​​Eolaire Gníomhach',
    'ad_domain_help'			=> 'Tá sé seo mar an gcéanna le do r-phost, ach ní i gcónaí.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".',
    'admin_cc_email'            => 'CC Email',
    'admin_cc_email_help'       => 'Send a copy of checkin/checkout emails to this address.',
    'admin_settings'            => 'Admin Settings',
    'is_ad'				        => 'Is freastalaí Gníomhach Eolaire é seo',
    'alerts'                	=> 'Alerts',
    'alert_title'               => 'Update Notification Settings',
    'alert_email'				=> 'Seol foláirimh chuig',
    'alert_email_help'          => 'Email addresses or distribution lists you want alerts to be sent to, comma separated.',
    'alerts_enabled'			=> 'Cumarsáid Cumarsáide',
    'alert_interval'			=> 'Tairseach Alerts ag dul in éag (i laethanta)',
    'alert_inv_threshold'		=> 'Tairseach Alert Fardail',
    'allow_user_skin'           => 'Allow User Skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.',
    'asset_ids'					=> 'IDanna Sócmhainní',
    'audit_interval'            => 'Agallamh Iniúchta',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date will be updated.',
    'audit_warning_days'        => 'Tairseach Rabhaidh Iniúchta',
    'audit_warning_days_help'   => 'Cé mhéad lá roimh ré ba chóir dúinn rabhadh a thabhairt duit nuair a bhíonn sócmhainní dlite le hiniúchadh?',
    'auto_increment_assets'		=> 'Enerate auto-incrementing asset tags',
    'auto_increment_prefix'		=> 'Réimse (roghnach)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'					=> 'Cúltacaí',
    'backups_help'              => 'Create, download, and restore backups ',
    'backups_restoring'         => 'Restoring from Backup',
    'backups_clean' => 'Clean the backed-up database before restore',
    'backups_clean_helptext' => "This can be useful if you're changing between database versions",
    'backups_upload'            => 'Upload Backup',
    'backups_path'              => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.)<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings'			=> 'Socruithe Barcode',
    'confirm_purge'			    => 'Dearbhaigh Purge',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'CSS saincheaptha',
    'custom_css_placeholder'	=> 'Add your custom CSS',
    'custom_css_help'			=> 'Cuir isteach aon scriosadh CSS saincheaptha ar mhaith leat a úsáid. Ná cuir na clibeanna &lt;style&gt;&lt;/style&gt; san áireamh.',
    'custom_forgot_pass_url'	=> 'Custom Password Reset URL',
    'custom_forgot_pass_url_help'	=> 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'dashboard_message'			=> 'Dashboard Message',
    'dashboard_message_help'	=> 'This text will appear on the dashboard for anyone with permission to view the dashboard.',
    'default_currency'  		=> 'Réamhshocrú Airgeadra',
    'default_eula_text'			=> 'Réamhshocrú EULA',
    'default_eula_text_placeholder' => 'Add your default EULA text',
    'default_language'			=> 'Teanga Réamhshocraithe',
    'default_eula_help_text'	=> 'Is féidir leat freisin EULAs saincheaptha a chomhcheangal le catagóirí sonracha sócmhainne.',
    'acceptance_note'           => 'Add a note for your decision (Optional)',
    'display_asset_name'        => 'Taispeáin Ainm na Sócmhainne',
    'display_checkout_date'     => 'Taispeáin Dáta Seiceáil',
    'display_eol'               => 'Taispeáin EOL in amharc an tábla',
    'display_qr'                => 'Display 2D barcode',
    'display_alt_barcode'		=> 'Taispeáin barcode 1D',
    'barcode_type'				=> 'Cineál Barcode 2D',
    'alt_barcode_type'			=> 'Cineál barrach 1D',
    'enabled'                   => 'Enabled',
    'eula_settings'				=> 'Socruithe EULA',
    'eula_markdown'				=> 'Ceadaíonn an EULA seo <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Additional Footer Text ',
    'footer_text_help'          => 'This text will appear in the right-side footer. Links are allowed using <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Line breaks, headers, images, etc may result in unpredictable results.',
    'footer_text_placeholder'   => 'Optional footer text',
    'general_settings'			=> 'Socruithe Ginearálta',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'			=> 'Gin Cúltaca',
    'google_workspaces'         => 'Google Workspaces',
    'header_color'              => 'Dath Ceannteideal',
    'info'                      => 'Ligeann na socruithe seo gnéithe áirithe de do shuiteáil a shaincheapadh.',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Leagan Laravel',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Default Permissions Group',
    'ldap_default_group_info'   => 'Select a group to assign to newly synced users. Remember that a user takes on the permissions of the group they are assigned.',
    'no_default_group'          => 'No Default Group',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client TLS Key',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'LDAP cumasaithe',
    'ldap_integration'          => 'Comhtháthú LDAP',
    'ldap_settings'             => 'Socruithe LDAP',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
    'ldap_location'             => 'LDAP Location',
'ldap_location_help'             => 'The Ldap Location field should be used if <strong>an OU is not being used in the Base Bind DN.</strong> Leave this blank if an OU search is being used.',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'Freastalaí LDAP',
    'ldap_server_help'          => 'This should start with ldap:// (for unencrypted) or ldaps:// (for TLS or SSL)',
    'ldap_server_cert'			=> 'Bailíochtú deimhnithe SSL LDAP',
    'ldap_server_cert_ignore'	=> 'Ceadaigh Teastas SSL neamhbhailí',
    'ldap_server_cert_help'		=> 'Roghnaigh an bosca seo má tá tú ag úsáid deimhnithe SSL féinmhínithe agus gur mhaith leat glacadh le deimhniú SSL neamhbhailí.',
    'ldap_tls'                  => 'Úsáid TLS',
    'ldap_tls_help'             => 'Níor cheart é seo a sheiceáil ach amháin má tá tú ag rith STARTTLS ar do fhreastalaí LDAP.',
    'ldap_uname'                => 'LDAP Bind Ainm Úsáideora',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'Pasfhocal Bind LDAP',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'Scagaire LDAP',
    'ldap_pw_sync'              => 'Cache LDAP Passwords',
    'ldap_pw_sync_help'         => 'Uncheck this box if you do not wish to keep LDAP passwords cached as local hashed passwords. Disabling this means that your users may not be able to login if your LDAP server is unreachable for some reason.',
    'ldap_username_field'       => 'Réimse Ainm Úsáideora',
    'ldap_lname_field'          => 'Ainm deiridh',
    'ldap_fname_field'          => 'Céadainm LDAP',
    'ldap_auth_filter_query'    => 'Ceist Fíordheimhnithe LDAP',
    'ldap_version'              => 'Leagan LDAP',
    'ldap_active_flag'          => 'Bratach Gníomhach LDAP',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_invert_active_flag'   => 'LDAP Invert Active Flag',
    'ldap_invert_active_flag_help'     => 'If enabled: when the value returned by LDAP Active Flag is <code>0</code> or <code>false</code> the user account will be active.',
    'ldap_emp_num'              => 'Uimhir Fostaí LDAP',
    'ldap_email'                => 'Ríomhphost LDAP',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synchronization',
    'license'                   => 'Software License',
    'load_remote'               => 'Load Remote Avatars',
    'load_remote_help_text'		=> 'Uncheck this box if your install cannot load scripts from the outside internet. This will prevent Snipe-IT from trying load avatars from Gravatar or other outside sources.',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'IP Address',
    'login_success'             => 'Success?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => 'Logáil isteach Nóta',
    'login_note_placeholder'            => "If you do not have a login or have found a device belonging to this company, please call technical support at 888-555-1212. Thank you.",
    'login_note_help'           => 'Áirítear go roghnúil cúpla abairt ar do scáileán logála isteach, mar shampla chun cabhrú le daoine a bhfuair gléas caillte nó goidte. Glacann an réimse seo le <a href="https://help.github.com/articles/github-flavored-markdown/">Github blastáilte markdown</a>',
    'login_remote_user_text'    => 'Remote User login options',
    'login_remote_user_enabled_text' => 'Enable Login with Remote User Header',
    'login_remote_user_enabled_help' => 'This option enables Authentication via the REMOTE_USER header according to the "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Disable other authentication mechanisms',
    'login_common_disabled_help' => 'This option disables other authentication mechanisms. Just enable this option if you are sure that your REMOTE_USER login is already working',
    'login_remote_user_custom_logout_url_text' => 'Custom logout URL',
    'login_remote_user_custom_logout_url_help' => 'If a url is provided here, users will get redirected to this URL after the user logs out of Snipe-IT. This is useful to close the user sessions of your Authentication provider correctly.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Use in Print',
    'logo_print_assets_help'    => 'Use branding on printable asset lists ',
    'full_multiple_companies_support_help_text' => 'Úsáideoirí srianta (lena n-áirítear admins) a shanntar do chuideachtaí le sócmhainní na cuideachta.',
    'full_multiple_companies_support_text' => 'Tacaíocht Iomlána Iompórtálacha Iomlán',
    'scope_locations_fmcs_support_text'  => 'Scope Locations with Full Multiple Companies Support',
    'scope_locations_fmcs_support_help_text'  => 'In previous versions, locations were not restricted to a particular company. If this setting is disabled, this preserves backward compatibility with older versions and locations can be used across multiple companies. If this setting is enabled, locations are restricted to their selected company.',
    'show_in_model_list'   => 'Show in Model Dropdowns',
    'optional'					=> 'roghnach',
    'per_page'                  => 'Torthaí ar an Leathanach',
    'php'                       => 'Leagan PHP',
    'php_info'                  => 'PHP info',
    'php_overview'              => 'PHP',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Ní mór duit php-gd a shuiteáil chun cóid QR a thaispeáint, féach treoracha a shuiteáil.',
    'php_gd_warning'            => 'NÍ bhfuil an próiseáil Íomhá PHP agus an breiseán GD suiteáilte.',
    'pwd_secure_complexity'     => 'Coimpléasc Pasfhocal',
    'pwd_secure_complexity_help' => 'Roghnaigh cibé rialacha coimhdeachta phasfhocal is mian leat a fhorfheidhmiú.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => 'Carachtair íosta Pasfhocal',
    'pwd_secure_min_help'       => 'Is é an luach íosta ceadaithe 8',
    'pwd_secure_uncommon'       => 'Coinnigh pasfhocail coitianta',
    'pwd_secure_uncommon_help'  => 'Ní dhéanfaidh sé seo úsáideoirí a dhíspreagadh ó úsáid focal coitianta ó na 10,000 focal faire is mó a thuairiscítear i sáruithe.',
    'qr_help'                   => 'Cumasaigh Cóid QR den chéad uair chun seo a leagan síos',
    'qr_text'                   => 'QR Cód Téacs',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML settings',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
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
    'setting'                   => 'Socrú',
    'settings'                  => 'Socruithe',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Archived Assets',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Show images in emails',
    'show_images_in_email_help'   => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name'                 => 'Ainm an tSuímh',
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
    'snipe_version'  			=> 'Snipe-IT leagan',
    'support_footer'            => 'Support Footer Links ',
    'support_footer_help'       => 'Specify who sees the links to the Snipe-IT Support info and Users Manual',
    'version_footer'            => 'Version in Footer ',
    'version_footer_help'       => 'Specify who sees the Snipe-IT version and build number.',
    'system'                    => 'Eolas Córas',
    'update'                    => 'Socruithe Nuashonraithe',
    'value'                     => 'Luach',
    'brand'                     => 'Brandáil',
    'brand_help'                => 'Logo, Site Name',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Socruithe Maidir',
    'about_settings_text'       => 'Ligeann na socruithe seo gnéithe áirithe de do shuiteáil a shaincheapadh.',
    'labels_per_page'           => 'Lipéid in aghaidh an leathanaigh',
    'label_dimensions'          => 'Toisí lipéid (orlach)',
    'next_auto_tag_base'        => 'Ar Aghaidh auto-incrimint',
    'page_padding'              => 'Imeall Page (orlach)',
    'privacy_policy_link'       => 'Link to Privacy Policy',
    'privacy_policy'            => 'Privacy Policy',
    'privacy_policy_link_help'  => 'If a url is included here, a link to your privacy policy will be included in the app footer and in any emails that the system sends out, in compliance with GDPR. ',
    'purge'                     => 'Taifid Scriosta Purge',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => 'Gutter bun lipéadaithe',
    'labels_display_sgutter'    => 'Gutter taobh lipéid',
    'labels_fontsize'           => 'Méid an chló lipéid',
    'labels_pagewidth'          => 'Leithead bileog lipéid',
    'labels_pageheight'         => 'Airde bileog lipéid',
    'label_gutters'        => 'Spásáil lipéid (orlach)',
    'page_dimensions'        => 'Toisí Page (orlach)',
    'label_fields'          => 'Feithiclí le feiceáil le lipéad',
    'inches'        => 'orlach',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Nasc le Snipe-IT i Ríomhphoist',
    'show_url_in_emails_help_text'      => 'Déan an bosca seo a dhíscriosadh mura dteastaíonn uait ceangal ar ais chuig do shuiteáil Snipe-IT i do chosáin ríomhphoist. Úsáideach mura ndéanann an chuid is mó d\'úsáideoirí logáil isteach riamh.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Uasmhéid mionnailnail',
    'thumbnail_max_h_help'   => 'Uasmhéid airde i bpicteilíní is féidir na mionsamhlacha a thaispeáint san amharc liostaí. Min 25, uasmhéid 500.',
    'two_factor'        => 'Fíordheimhniú Dhá Fachtóir',
    'two_factor_secret'        => 'Cód Dhá-Fachtóir',
    'two_factor_enrollment'        => 'Rollú Dhá Fachtóir',
    'two_factor_enabled_text'        => 'Cumasaigh Dhá Fachtóir',
    'two_factor_reset'        => 'Athshocraigh Dhá-Rúnda Fachtóir',
    'two_factor_reset_help'        => 'This will force the user to enroll their device with their authenticator app again. This can be useful if their currently enrolled device is lost or stolen. ',
    'two_factor_reset_success'          => 'Athshocraigh dhá fheiste fachtóir go rathúil',
    'two_factor_reset_error'          => 'Theip ar dhá athshocrú feiste fachtóir',
    'two_factor_enabled_warning'        => 'Má chuirtear ar chumas dhá fhachtóir mura bhfuil sé á chumasú faoi láthair, cuirfidh tú i bhfeidhm láithreach le d\'fhíordheimhniú le gléas cláraithe Google Auth. Beidh an cumas agat do ghléas a chlárú mura bhfuil duine cláraithe faoi láthair.',
    'two_factor_enabled_help'        => 'Tabharfaidh sé seo fíordheimhniú dhá fhachtóir ag baint úsáide as Google Authenticator.',
    'two_factor_optional'        => 'Roghnach (Is féidir le húsáideoirí a chumasú nó a dhíchumasú má cheadaítear)',
    'two_factor_required'        => 'Riachtanach do gach úsáideoir',
    'two_factor_disabled'        => 'Faoi mhíchumas',
    'two_factor_enter_code'	=> 'Cuir isteach Dhá Chód Fachtóir',
    'two_factor_config_complete'	=> 'Cuir Cód',
    'two_factor_enabled_edit_not_allowed' => 'Ní cheadaíonn do riarthóir duit an leagan seo a eagrú.',
    'two_factor_enrollment_text'	=> "Tá dhá fhíordheimhniú fachtóir ag teastáil, áfach, nach bhfuil do ghléas cláraithe fós. Oscail d'iarratas Google Authenticator agus scrúdaigh an cód QR thíos chun do ghléas a chlárú. Nuair atá tú ag clárú do gléas, cuir isteach an cód thíos",
    'require_accept_signature'      => 'A cheangal Síniú',
    'require_accept_signature_help_text'      => 'Éileoidh an chumas seo a chumasú d\'úsáideoirí comhartha a dhéanamh go fisiciúil ar ghlacadh sócmhainne.',
    'require_checkinout_notes'  => 'Require Notes on Checkin/Checkout',
    'require_checkinout_notes_help_text'    => 'Enabling this feature will require the note fields to be populated when checking in or checking out an asset.',
    'left'        => 'ar chlé',
    'right'        => 'ceart',
    'top'        => 'barr',
    'bottom'        => 'bun',
    'vertical'        => 'ingearach',
    'horizontal'        => 'cothrománach',
    'unique_serial'                => 'Unique serial numbers',
    'unique_serial_help_text'                => 'Checking this box will enforce a uniqueness constraint on asset serials',
    'zerofill_count'        => 'Fad na clibeanna sócmhainne, lena n-áirítear zerofill',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
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
    'barcode_title' => 'Update Barcode Settings',
    'barcodes' => 'Barcodes',
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
    'localization' => 'Localization',
    'localization_title' => 'Update Localization Settings',
    'localization_help' => 'Language, date display',
    'notifications' => 'Notifications',
    'notifications_help' => 'Email Alerts & Audit Settings',
    'asset_tags_help' => 'Incrementing and prefixes',
    'labels' => 'Labels',
    'labels_title' => 'Update Label Settings',
    'labels_help' => 'Barcodes &amp; label settings',
    'purge_help' => 'Taifid Scriosta Purge',
    'ldap_extension_warning' => 'It does not look like the LDAP extension is installed or enabled on this server. You can still save your settings, but you will need to enable the LDAP extension for PHP before LDAP syncing or login will work.',
    'ldap_ad' => 'LDAP/AD',
    'ldap_test_label' => 'Test LDAP Sync',
    'ldap_test_login' => ' Test LDAP Login',
    'ldap_username_placeholder' => 'LDAP Username',
    'ldap_password_placeholder' => 'LDAP Password',
    'employee_number' => 'Employee Number',
    'create_admin_user' => 'Create a User ::',
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
    'label2_title'            => 'Teideal',
    'label2_title_help'       => 'The title to show on labels that support it',
    'label2_title_help_phold' => 'The placeholder <code>{COMPANY}</code> will be replaced with the asset&apos;s company name',
    'label2_asset_logo'       => 'Use Asset Logo',
    'label2_asset_logo_help'  => 'Use the logo of the asset&apos;s assigned company, rather than the value at <code>:setting_name</code>',
    'label2_1d_type'          => '1D Barcode Type',
    'label2_1d_type_help'     => 'Format for 1D barcodes',
    'label2_2d_type'          => 'Cineál Barcode 2D',
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
        'username_format'		=> 'Ainm Úsáideora Formáid',
        'firstname_lastname_format'	=> 'Ainm Ainm Chéad Ainm (jane.smith)',
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
        'email_format'			=> 'Foirm Ríomhphoist',
        'firstname_lastname_format'	=> 'Ainm Ainm Chéad Ainm (jane.smith@example.com)',
        'first_name_format'		=> 'Céadainm (jane@example.com)',
        'last_name_format'		=> 'Last Name (doe@example.com)',
        'filastname_format'			=> 'An Chéad Ainm Deiridh Tosaigh (jsmith@example.com)',
        'lastnamefirstinitial_format' =>  'Last Name First Initial (smithj@example.com)',
        'firstname_lastname_underscore_format' => 'First Name Last Name (jane_smith@example.com)',
        'firstinitial.lastname' => 'First Initial Last Name (j.smith@example.com)',
        'lastname_firstinitial' => 'Last Name First Initial (smith_j@example.com)',
        'lastname_dot_firstinitial_format' => 'Last Name First Initial (smith.j@example.com)',
        'firstnamelastname'     => 'First Name Last Name (janesmith@example.com)',
        'firstnamelastinitial'  => 'First Name Last Initial (janes@example.com)',
        'lastnamefirstname'      => 'Last Name.First Name (smith.jane@example.com)',
    ],



    'logo_labels' => [
        'acceptance_pdf_logo'       => 'PDF Logo',
        'email_logo'                => 'Email Logo',
        'label_logo'                => 'Label Logo',
        'logo'                      => 'Site Logo',
        'favicon'                   => 'Favicon',
    ],

    'logo_help' => [
        'email_logo_size'       => 'Square logos in email look best. ',
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
        'purge'             => 'permanently delete',
        'security'          => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    ],

];
