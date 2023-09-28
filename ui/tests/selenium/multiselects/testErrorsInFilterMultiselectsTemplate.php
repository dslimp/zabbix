<?php
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

require_once dirname(__FILE__).'/../common/testErrorsInFilterMultiselects.php';

/**
 * Test for assuring that bug from ZBX-23302 is not reproducing.
 */
class testErrorsInFilterMultiselectsTemplate extends testErrorsInFilterMultiselects {

	public $filter_labels = [
		'context_page' => ['Linked templates', 'Templates', 'Template groups'],
		'object_page' => ['Templates', 'Templates', 'Template groups']
	];

	/**
	 * @dataProvider getCheckDialogsData
	 */
	public function testErrorsInFilterMultiselectsTemplate_CheckDialogs($data) {
		$this->testMultiselectDialog($data, 'zabbix.php?action=template.list', 'AIX by Zabbix agent');
	}
}
