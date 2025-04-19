<?php

return [
    'custom_fields'		        => 'Anpassade fält',
    'manage'                    => 'Hantera',
    'field'		                => 'Fält',
    'about_fieldsets_title'		=> 'Om fältuppsättningar',
    'about_fieldsets_text'		=> 'Fieldsets låter dig skapa grupper av fält som är anpassade efter och ofta använda av en viss typ av tillgång. Ex. "CPU", "RAM", "HDD", etc.',
    'custom_format'             => 'Anpassat Regex-format...',
    'encrypt_field'      	        => 'Kryptera värdet för det här fältet i databasen',
    'encrypt_field_help'      => 'VARNING: Kryptering av ett fält genererar fältet osökbart.',
    'encrypted'      	        => 'Krypterat',
    'fieldset'      	        => 'Fältuppsättning',
    'qty_fields'      	      => 'Antal fält',
    'fieldsets'      	        => 'Fältuppsättningar',
    'fieldset_name'           => 'Namn på fältuppsättning',
    'field_name'              => 'Fältnamn',
    'field_values'            => 'Fältvärden',
    'field_values_help'       => 'Lägg till valbara alternativ, en per rad. Tomma rader förutom första raden kommer att ignoreras.',
    'field_element'           => 'Formulärelement',
    'field_element_short'     => 'Element',
    'field_format'            => 'Format',
    'field_custom_format'     => 'Anpassat Regex-format',
    'field_custom_format_help'     => 'Detta fält låter dig använda ett regex-uttryck för validering. Det ska börja med "regex:" - till exempel för att säkerställa att värdet i ett anpassat fält innehåller ett giltigt IMEI (15 siffror), skulle du använda: <code>regex:/^[0-9]{15}$/</code>.',
    'required'   		          => 'Obligatoriskt',
    'req'   		              => 'Obl.',
    'used_by_models'   		    => 'Används av modeller',
    'order'   		            => 'Sortering',
    'create_fieldset'         => 'Ny fältuppsättning',
    'update_fieldset'         => 'Uppdatera fältuppsättning',
    'fieldset_does_not_exist'   => 'Användare [: id] existerar inte',
    'fieldset_updated'         => 'Fältuppsättning uppdaterad',
    'create_fieldset_title' => 'Skapa ny fältuppsättning',
    'create_field'            => 'Nytt anpassat fält',
    'create_field_title' => 'Skapa ett nytt anpassat fält',
    'value_encrypted'      	        => 'Värdet på det här fältet är krypterat i databasen. Endast adminanvändare kan se det dekrypterade värdet',
    'show_in_email'     => 'Inkludera värdet på det här fältet i utcheckningsmejlen som skickas till användarna? Krypterade fält inkluderas inte i e-postmeddelanden',
    'show_in_email_short' => 'Inkludera i e-post',
    'help_text' => 'Hjälptext',
    'help_text_description' => 'Detta är valfri text som visas under formulärelementen medan du redigerar en tillgång för att ge sammanhang till fältet.',
    'about_custom_fields_title' => 'Om anpassade fält',
    'about_custom_fields_text' => 'Anpassade fält låter dig lägga till egna attribut för tillgångar.',
    'add_field_to_fieldset' => 'Lägg till fält för fältuppsättning',
    'make_optional' => 'Obligatoriskt - klicka för att göra valfritt',
    'make_required' => 'Valfritt - klicka för att göra obligatoriskt',
    'reorder' => 'Ändra ordning',
    'db_field' => 'DB-fält',
    'db_convert_warning' => 'VARNING. Detta fält finns i tabellen för anpassade fält som <code>:db_column</code> men borde vara <code>:expected</code>.',
    'is_unique' => 'Detta värde måste vara unikt för alla tillgångar',
    'unique' => 'Unik',
    'display_in_user_view' => 'Tillåt den utcheckade användaren att visa dessa värden i sin vy "Visa tilldelade tillgångar"',
    'display_in_user_view_table' => 'Synlig för användare',
    'auto_add_to_fieldsets' => 'Lägg automatiskt till detta fält för varje ny fältuppsättning',
    'add_to_preexisting_fieldsets' => 'Lägg till i alla existerande fältuppsättningar',
    'show_in_listview' => 'Visa i listvyer som standard. Användare med tillräcklig behörighet kommer fortfarande att kunna visa/dölja via kolumnväljaren',
    'show_in_listview_short' => 'Visa i vy',
    'show_in_requestable_list_short' => 'Visa i vyn för begärbara tillgångar',
    'show_in_requestable_list' => 'Visa värde i vyn för begärbara tillgångar. Krypterade fält kommer inte att visas',
    'encrypted_options' => 'Detta fält är krypterat, så vissa visningsalternativ kommer inte att vara tillgängliga.',
    'display_checkin' => 'Display in checkin forms',
    'display_checkout' => 'Display in checkout forms',
    'display_audit' => 'Display in audit forms',

];
