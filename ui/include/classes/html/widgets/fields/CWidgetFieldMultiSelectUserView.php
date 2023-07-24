<?php declare(strict_types = 0);
/*
** Zabbix
** Copyright (C) 2001-2023 Zabbix SIA
**
** This program is free software; you can redistribute it and/or modify
** it under the terms of the GNU General Public License as published by
** the Free Software Foundation; either version 2 of the License, or
** (at your option) any later version.
**
** This program is distributed in the hope that it will be useful,
** but WITHOUT ANY WARRANTY; without even the implied warranty of
** MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
** GNU General Public License for more details.
**
** You should have received a copy of the GNU General Public License
** along with this program; if not, write to the Free Software
** Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
**/


use Zabbix\Widgets\Fields\CWidgetFieldMultiSelectUser;

class CWidgetFieldMultiSelectUserView extends CWidgetFieldMultiSelectView {

	public function __construct(CWidgetFieldMultiSelectUser $field, array $data) {
		parent::__construct($field, $data);
	}

	protected function getObjectName(): string {
		return 'users';
	}

	protected function getObjectLabel(): string {
		return $this->field->isMultiple() ? _('Users') : _('User');
	}

	protected function getPopupParameters(): array {
		return $this->popup_parameters + [
			'srctbl' => 'users',
			'srcfld1' => 'userid',
			'srcfld2' => 'fullname'
		];
	}
}
