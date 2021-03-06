<?php
return [

	/**
	 * Menu items and titles
	 */
	'bookmarks' => "Закладки",
	'bookmarks:add' => "Добавить в закладки",
	'bookmarks:edit' => "Редактировать закладку",
	'bookmarks:owner' => "Закладки пользователя %s",
	'bookmarks:friends' => "Закладки друзей",
	'bookmarks:everyone' => "Все закладки",
	'bookmarks:this' => "Добавить в закладки",
	'bookmarks:this:group' => "Добавить в закладки в %s",
	'bookmarks:bookmarklet' => "Добавить закладки",
	'bookmarks:bookmarklet:group' => "Добавить закладки группы",
	'bookmarks:inbox' => "Ваши закладки",
	'bookmarks:address' => "Адрес сайта",
	'bookmarks:none' => '---',

	'bookmarks:notify:summary' => 'Новая закладка %s',
	'bookmarks:notify:subject' => 'Новая закладка: %s',
	'bookmarks:notify:body' =>
'%s добавил[а] новую закладку: %s

Адрес: %s

%s

Просмотреть и комментировать по ссылке:
%s
',

	'bookmarks:delete:confirm' => "Вы действительно хотите удалить закладку?",

	'bookmarks:numbertodisplay' => 'Число отображаемых закладок',

	'river:create:object:bookmarks' => 'Пользователь %s добавил закладку',
	'river:comment:object:bookmarks' => 'Пользователь %s оставил комментарий к закладке %s',
	'bookmarks:river:annotate' => 'Пользователь %s сделал',
	'bookmarks:river:item' => 'закладку',

	'item:object:bookmarks' => 'Закладки',

	'bookmarks:group' => 'Закладки группы',
	'bookmarks:enablebookmarks' => 'Включить закладки группы',
	'bookmarks:nogroup' => 'В этой группе нет закладок',
	
	/**
	 * Widget and bookmarklet
	 */
	'bookmarks:widget:description' => "Этот элемент показывает Ваши закладки.",

	'bookmarks:bookmarklet:description' =>
			"A bookmarklet is a special kind of button you save to your browser's links bar. This allows you to save any resource you find on the web to your bookmarks. To set it up, drag the button below to your browser's links bar:",

	'bookmarks:bookmarklet:descriptionie' =>
			"Если Вы используете Internet Explorer, Вам нужно нажать правой кнопкой мыши на значок закладок, выбрать 'Добавить в избранное', а затем на адресную строку.",

	'bookmarks:bookmarklet:description:conclusion' =>
			"Вы можете сохранить любую страницу в любое время.",

	/**
	 * Status messages
	 */

	'bookmarks:save:success' => "Закладка добавлена.",
	'bookmarks:delete:success' => "Закладка удалена.",

	/**
	 * Error messages
	 */

	'bookmarks:save:failed' => "Простите, Ваша закладка не может быть сохранена. Проверьте название, адрес и попробуйте снова.",
	'bookmarks:save:invalid' => "Адрес закладки не корректный - она не будет сохранена.",
	'bookmarks:delete:failed' => "Простите, Ваша закладка не может быть удалена. Попробуйте снова.",
	'bookmarks:unknown_bookmark' => 'Не могу найти указанную закладку',
];
