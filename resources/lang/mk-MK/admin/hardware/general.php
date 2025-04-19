<?php

return [
    'about_assets_title'           => 'За основните средства',
    'about_assets_text'            => 'Основни средства се ставки следени по сериски број или код на средства. Тие обично имаат повисока набавна вредност и е важно нивно поединечно евидентирање.',
    'archived'  				=> 'Архивирано',
    'asset'  					=> 'Основно средство',
    'bulk_checkout'             => 'Масовно задолжување',
    'bulk_checkin'              => 'Bulk Checkin',
    'checkin'  					=> 'Раздолжи основно средство',
    'checkout'  				=> 'Задолжи основно средство',
    'clone'  					=> 'Клонирај основно средство',
    'deployable'  				=> 'Распоредливи',
    'deleted'  					=> 'Ова основно средство е избришано.',
    'delete_confirm'            => 'Дали сте сигурни дека сакате да го избришете ова основно средство?',
    'edit'  					=> 'Уредување на основно средство',
    'model_deleted'  			=> 'Моделот на ова основно средство е избришан. Мора да го вратите моделот пред да го вратите основното средство.',
    'model_invalid'             => 'Моделот за ова основно средство е невалиден.',
    'model_invalid_fix'         => 'Средството мора да се ажурира користете валиден модел на средства пред да се обидете да го задолжите или раздолжите, или да го попишите.',
    'requestable'               => 'Може да се побара',
    'requested'				    => 'Побарано',
    'not_requestable'           => 'Не е побарливо',
    'requestable_status_warning' => 'Не менувајте го побарливиот статус ',
    'restore'  					=> 'Врати основно средство',
    'pending'  					=> 'Во чекање',
    'undeployable'  			=> 'Нераспоредливи',
    'undeployable_tooltip'  	=> 'Ова основно средство има статус на нераспоредливо и моментално не е можно да се задолжи.',
    'view'  					=> 'Преглед на основно средство',
    'csv_error' => 'Имате грешка во вашата CSV датотека:',
    'import_text' => '<p>Upload a CSV that contains asset history. The assets and users MUST already exist in the system, or they will be skipped. Matching assets for history import happens against the asset tag. We will try to find a matching user based on the user\'s name you provide, and the criteria you select below. If you do not select any criteria below, it will simply try to match on the username format you configured in the <code>Admin &gt; General Settings</code>.</p><p>Fields included in the CSV must match the headers: <strong>Asset Tag, Name, Checkout Date, Checkin Date</strong>. Any additional fields will be ignored. </p><p>Checkin Date: blank or future checkin dates will checkout items to associated user.  Excluding the Checkin Date column will create a checkin date with todays date.</p>    ',
    'csv_import_match_f-l' => 'Усогласи корисници по <strong>име.презиме</strong> (<code>jane.smith</code>) format',
    'csv_import_match_initial_last' => 'Усогласи корисници по <strong>прв иницијал од презимето</strong> (<code>jsmith</code>) format',
    'csv_import_match_first' => 'Усогласи корисници по <strong>име</strong> (<code>jane</code>) format',
    'csv_import_match_email' => 'Усогласи корисници по <strong>е-пошта</strong> as username',
    'csv_import_match_username' => 'Усогласи корисници по <strong>корисничко име</strong>',
    'error_messages' => 'Порака за грешка:',
    'success_messages' => 'Порака за успех:',
    'alert_details' => 'Видете подолу за детали.',
    'custom_export' => 'Обичен извоз',
    'mfg_warranty_lookup' => 'Пребарување на статусот :manufacturer на гаранција',
    'user_department' => 'Оддел на корисникот',
];
