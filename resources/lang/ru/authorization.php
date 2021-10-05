<?php
return [
	'authorization' => 'заявку на авторизацию',
	'authorizations' => 'Заявки на авторизацию',
	'icon' => 'map-pin',
	//
	'created' => 'Заявка на авторизацию успешно создана',
	'updated' => 'Заявка на авторизацию успешно обновлена',
	'deleted' => 'Заявка на авторизацию успешно удалена',
	//
	"id" => "№ заявки",
	'created_at' => 'Дата создания',
	"user_id" => "Пользователь",
	"role_id" => "Тип авторизации",
	"status_id" => "Статус",
	'request' => [
		'title' => 'Подать заявку на авторизацию',
		'text' => 'Выберите тип авторизации, на который вы хотите подать заявку (нажмите кнопку):',
		'text_fl' => 'Выберите тип авторизации, на который вы хотите подать заявку (нажмите кнопку):',
		'notice' => 'Для получения доступа к возможностям личного кабинета, в том числе:'
			. '<ul>'
			. '<li>отображение на сайте в качестве официального сервиса и дилера</li>'
			. '<li>подача актов гарантийного ремонта и монтажа</li>'
			. '<li>заказ запасных частей</li>'
			. '</ul>'
			. 'необходимо подать заявку на авторизацию',
	],
	'help' => [
		'address_id' => 'Нет адреса в списке?',
		'type_id' => 'Оборудование',
	],
	'learn' => [
		'title' => 'Пройти обучение',
		'text' => 'Выберите направление обучения для получения сертификата',
		'montage' => 'https://docs.google.com/forms/d/e/1FAIpQLSfESmEnm34J96wp5hIkYyh1g6UJR2i_1_hTS2C3hjcYeNfbfA/viewform',
	],

	'pre_accepted' => [
		'0' => 'Менеджером не проверена',
		'1' => 'Менеджером одобрена',
		'icon_0' => 'circle-o',
		'icon_1' => 'check',
		'color_1' => 'primary',
		'color_0' => 'secondary',
	],
	'header' => [
		'authorization' => 'Заявка на авторизацию',
	],
	'email' => [
		'title' => 'Оформлена новая заявка на авторизацию',
		'h1' => 'Оформлена новая заявка на авторизацию',
		'pre_accepted' => [
            'manager' => 'Ответственный за регион менеджер',
            'action' => 'Необходимо пользователя из заявки проверить и подтвердить авторизацию',
            'title' => 'Авторизация согласована менеджером',
            'h1' => 'Авторизация согласована менеджером',
        ],
		'expired' => [
            'manager' => 'Ответственный за регион менеджер',
            'action' => 'Необходимо пользователя из заявки проверить и подтвердить авторизацию',
            'title' => 'Заявка на авторизацию не обрабоатна более недели',
            'h1' => 'Заявка на авторизацию не обрабоатна более недели',
        ],
		'status' => [
            'title' => 'Статус заявки на авторизацию изменен',
            'h1' => 'Статус заявки на авторизацию изменен',
        ],
	],
	'error' => [
		'type_accept' => '(уже авторизованы)',
		'create' => [
			'header' => 'Вы не можете добавить заявку',
			'text' => 'Заявка по типу авторизации <b>:role</b> уже находится в обработке',
			'footer' => 'Дождитесь принятия решения адмистратором',
		],
	],
];