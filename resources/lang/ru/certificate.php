<?php
return [
    'certificate'  => 'Сертификат',
    'certificates' => 'Сертификаты',
    'icon'         => 'certificate',
    //
    'loaded'       => 'Сертификаты успешно загружены',
	'created' => 'Сертификат успешно добавлен',
    'deleted'      => 'Сертификат успешно удален',
    'help'         => 'Столбцы: Номер сертификата, Кому выдан ФИО, Кому выдан Органзация(не обязательное)',
	'not_exist'	=> 'Нет сертификата в списке? <br /> Если Вы знаете номер своего сертификата, можете его ввести в разделе личного кабинета',
	'tell_admin'	=> 'Если Вы уже прошли обучение, но не знаете номер сертификата, обратитесь к администратору. ',
    //
    'engineer_id'  => 'Инженер',
    'name'         => 'Кому выдан, ФИО',
    'organization' => 'Организация',
    'type_id'      => 'Тип сертификата',
    //
    'placeholder'  => [
        'id'              => '№ сертификата',
        'search'          => 'Поиск сертификата',
        'search_engineer' => 'Поиск инженера',
],
	'header' => [
		'mounting' => 'Сертификат монтажника',
	],
	'button' => [
		'get' => 'Получить результаты последнего тестирования',
		'download' => 'Скачать',
		'download_pdf' => 'Скачать сертификат в PDF',
		'edit_position' => 'Изменить компанию и должность',
		'edit_locality' => 'Изменить город',
	],
	'error' => [
		'google' => 'Произошла ошибка при импорте сертификатов',
		'unhandled' => 'Произошла системная ошибка. Обратитесь к администратору сайта',
		'unauthorized' => 'Не удалось скачать запрашиваемый сертификат',
		'not_found' => 'Успешных результатов тестирования не найдено.',
		'spreadsheet_id_not_found' => 'Не указан источник для получения данных',
		'spreadsheet_range_not_found' => 'Не указан диапазон для получения данных',
		'deleted' => 'Ошибка удаления сертификата',

		'id' => 'Неверный № сертификата',
		'not_exist' => '(нет сертификата)',
		'load' => [
			'file' => 'Ошибка загрузки файла :error',
			'empty' => 'Данные для загрузки отсутствуют',
			'name_is_null' => 'Кому выдан, ФИО не указан',
			'certificate_is_null' => 'Номер сертификата не указан',
			'duplicate' => 'Найден дубликат артикула',

		],
	],
	'pdf' => [
		'name' => 'ФИО',
		'created_at' => 'Дата выдачи',
	],
];