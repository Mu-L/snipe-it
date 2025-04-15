<?php

return [
    'bulk_delete'		=> 'Kinnita kahendite hulgi kustutamine',
    'bulk_restore'      => 'Confirm Bulk Restore Assets', 
  'bulk_delete_help'	=> 'Kontrolli alltoodud vahendid hulgi kustutamiseks. Kui oled need kustutanud, võib neid veel taastada, kuid neid ei saa enam seostada kasutajatega, kellega nad hetkel seotud on.',
  'bulk_restore_help'	=> 'Review the assets for bulk restoration below. Once restored, these assets will not be associated with any users they were previously assigned to.',
  'bulk_delete_warn'	=> 'Sa hakkad kustsutama :asset_count vahendit.',
  'bulk_restore_warn'	=> 'You are about to restore :asset_count assets.',
    'bulk_update'		=> 'Uuenduste hulgihaldus',
    'bulk_update_help'	=> 'See vorm võimaldab teil korraga mitme vara värskendada. Täitke ainult väljad, mida tuleb muuta. Kõik tühjad tühikud jäävad muutmata.',
    'bulk_update_warn'	=> 'You are about to edit the properties of a single asset.|You are about to edit the properties of :asset_count assets.',
    'bulk_update_with_custom_field' => 'Note the assets are :asset_model_count different types of models.',
    'bulk_update_model_prefix' => 'On Models', 
    'bulk_update_custom_field_unique' => 'This is a unique field and can not be bulk edited.',
    'checkedout_to'		=> 'Väljastatud kasutajale',
    'checkout_date'		=> 'Väljastamise kuupäev',
    'checkin_date'		=> 'Tagastamise kuupäev',
    'checkout_to'		=> 'Väljasta kasutajale',
    'cost'				=> 'Ostuhind',
    'create'			=> 'Loo vahend',
    'date'				=> 'Ostu kuupäev',
    'depreciation'	    => 'Amortisatsioon',
    'depreciates_on'	=> 'Halvustab sisse',
    'default_location'	=> 'Vaikimisi asukoht',
    'default_location_phone' => 'Default Location Phone',
    'eol_date'			=> 'EOL Kuupäev',
    'eol_rate'			=> 'EOL määr',
    'expected_checkin'  => 'Eeldatav tagastamise kuupäev',
    'expires'			=> 'Aegub',
    'fully_depreciated'	=> 'Täielikult amortiseerunud',
    'help_checkout'		=> 'Kui soovid selle vahendi kohe määrata, valige ülalolevast olekuloendist "Ready to Deploy". ',
    'mac_address'		=> 'MAC aadress',
    'manufacturer'		=> 'Tootja',
    'model'				=> 'Mudel',
    'months'			=> 'kuud',
    'name'				=> 'Ressursi nimi',
    'notes'				=> 'Märkmed',
    'order'				=> 'Tellimuse number',
    'qr'				=> 'QR kood',
    'requestable'		=> 'Kasutajad võivad seda vahendit taotleda',
    'redirect_to_all'   => 'Return to all :type',
    'redirect_to_type'   => 'Go to :type',
    'redirect_to_checked_out_to'   => 'Go to Checked Out to',
    'select_statustype'	=> 'Valige oleku tüüp',
    'serial'			=> 'Seerianumber',
    'status'			=> 'Staatus',
    'tag'				=> 'Vahendi silt',
    'update'			=> 'Varade värskendamine',
    'warranty'			=> 'Garantii',
        'warranty_expires'		=> 'Garantii aegub',
    'years'				=> 'aastat',
    'asset_location' => 'Uuenda vahendi asukohta',
    'asset_location_update_default_current' => 'Uuenda vaikimisi asukohta ja tegelikku asukohta',
    'asset_location_update_default' => 'Uuenda ainult vaikimisi asukohta',
    'asset_location_update_actual' => 'Update only actual location',
    'asset_not_deployable' => 'Selle vahendi olek ei luba seda väljastada.',
    'asset_not_deployable_checkin' => 'That asset status is not deployable. Using this status label will checkin the asset.',
    'asset_deployable' => 'This asset can be checked out.',
    'processing_spinner' => 'Processing... (This might take a bit of time on large files)',
    'optional_infos'  => 'Valikuline teave',
    'order_details'   => 'Tellimusega seonduv teave',
    'calc_eol'    => 'If nulling the EOL date, use automatic EOL calculation based on the purchase date and EOL rate.',
];
