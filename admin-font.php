<?php

/*
Plugin Name: تغییر فونت پیشخوان وردپرس
Plugin URI:  https://majnoonweb.ir
Author:     بیدمجنون
Author URI:  https://majnoonweb.ir
Version: 	 1.0
Description: افزونه آزاد تغییر فونت پیشخوان وردپرس تحت پروانهٔ عمومی همگانی گنو نسخه ۳ (GPLv3) منتشر شده است. این افزونه از قلم آزاد شبنم تحت پروانه OFL استفاده می‌کند. اعتبار این افزونه برای سالار یزدانی و مهدی محمدی‌سنج می‌باشید. Copyright 2020-2021 Salar, Mehti
*/
//

// Change counter wordpress font to Shabnam font.
// Copyright (C) 2020-2021  Salar Yazdani, Mehfi Mohamadi Sanj.

// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.

// You should have received a copy of the GNU General Public License
// along with this program.  If not, see <https://www.gnu.org/licenses/>.

if (!function_exists( 'admin-font' )) {
  require_once plugin_dir_path(__FILE__) . DIRECTORY_SEPARATOR . 'font-changer.php';
}
