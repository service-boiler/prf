<?php
return [
    'product_id' => 'Товар',
    'quantity'   => 'Остатки',
    'loaded'     => 'Остатки успешно обновлены',
    'upload'     => [
        'excel' => 'Из файла Excel',
        'url'   => 'По ссылке автоматической загрузки',
    ],
	'button' => [
		'load' => 'Загрузить отмеченные товары',
	],
    'error'      => [
        'load' => [
            'file'                  => 'Ошибка загрузки файла :error',
            'empty'                 => 'Данные для загрузки отсутствуют',
            'product'               => 'Товар с артикулом :artikul не найден',
            'artikul_is_null'       => 'Артикул не указан',
            'artikul_not_found'     => 'Артикул не найден',
            'quantity_is_null'      => 'Количество не указано',
            'quantity_not_number'   => 'Количество должно быть числом',
            'quantity_not_integer'  => 'Количество должно быть целым числом',
            'quantity_not_positive' => 'Количество должно быть целым положительным числом',
            'quantity_max'          => 'Максимальное количество должно быть <= 10000',
            'duplicate'             => 'Найден дубликат артикула',
            'date_error'             => 'Дата не корректна',
        ],
    ],
];