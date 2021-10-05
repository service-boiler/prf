<?php
return [
    'contragent'       => 'юридическое лицо',
    'contragent_user'  => 'юридическое лицо',
    'contragents'      => 'Юридические лица',
    'contragents_user' => 'Юридические лица',
    'icon'             => 'users',
    //
    'name'             => 'Наименование',
    "type_id"          => "Организационно-правовая форма",
    "organization_id"  => "Организация по договору",
    "contract"         => "Договор",
    "guid"             => "Идентификатор 1С",
    'created_at'       => 'Дата регистрации',
    'user_id'          => 'Сервисный центр',
    "inn"              => "ИНН",
    "ogrn"             => "ОГРН/ОГРНИП",
    "okpo"             => "ОКПО",
    "kpp"              => "КПП",
    "rs"               => "Расчётный счет",
    "ks"               => "Корреспондентский счет",
    "bik"              => "БИК",
    "bank"             => "Банк",
    "nds"              => "Учитывать НДС в сделках?",
    "nds_act"          => "Учитывать НДС в ремонтах?",
    //
    'created'          => 'Юридическое лицо успешно создано',
    'updated'          => 'Юридическое лицо успешно обновлено',
    'deleted'          => 'Юридическое лицо успешно удалено',
    //
    'header'           => [
        'contragent' => "Информация о юридическом лице",
        "legal"      => "Реквизиты организации",
        "payment"    => "Банковские реквизиты",
        "check"      => "Проверка контрагента",
    ],
    'error'            => [
        'inn'          => [
            'unique' => 'ИНН уже зарегистрирован. Проверьте введенные цифры, либо обратитесь к менеджеру',
        ],
        'organization' => "Не указана организация контрагента",
    ],
    'placeholder'      => [
        'search'         => 'Поиск контрагентов...',
        "name"           => "Например, Теплотехника ООО",
        "legal_address"  => "Например, г Воронеж, ул Матросова, д 12",
        "postal_address" => "Например, г. Воронеж, а/я 101",
        "inn"            => "10 цифр для юр.лиц и 12 цифр для ИП",
        "ogrn"           => "13 цифр для юр.лиц или 15 цифр для ИП",
        "okpo"           => "8 или 10 цифр",
        "kpp"            => "9 цифр (обязательно для юр.лиц)",
        "rs"             => "20 цифр",
        "ks"             => "20 цифр",
        "bik"            => "9 или 11 цифр",
        "bank"           => "Например, ОАО АКБ Авангард",
        "contract"       => "Например, 72/12-08 от 08.02.2018",
    ],
    'help'             => [
        "name"      => "Полное юридическое наименование в соответствии с учредительными документами",
        "back"      => "В карточку контрагента",
        "back_list" => "В список контрагентов",
        'search'    => 'Поиск по наименованию и ИНН контрагента',
    ],

    'excel' => [
        "A" => "Номер строки",
        'B' => 'Наименование',
        "C" => "ОПФ",
        "D" => "Организация по договору",
        "E" => "Договор",
        "F" => "Идентификатор 1С",
        'G' => 'Дата регистрации',
        'H' => 'Сервисный центр',
        "I" => "ИНН",
        "J" => "ОГРН/ОГРНИП",
        "K" => "ОКПО",
        "L" => "КПП",
        "M" => "Расчётный счет",
        "N" => "Корреспондентский счет",
        "O" => "БИК",
        "P" => "Банк",
        "Q" => "Учитывать НДС в сделках?",
        "R" => "Учитывать НДС в ремонтах?",
    ],
];