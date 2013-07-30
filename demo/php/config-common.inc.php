<?php
/*
 * Generated configuration file
 * Generated by: phpMyAdmin 2.9.0-dev setup script by Michal Čihař <michal@cihar.com>
 * Version: $Id: setup.php,v 1.29 2006/03/17 10:17:58 nijel Exp $
 * Date: Thu, 27 Apr 2006 13:37:57 GMT
 */

/* Servers configuration */
$i = 0;

/* Server localhost (config:root) [1] */
$i++;
$cfg['Servers'][$i]['bookmarktable'] = 'pma__bookmark';
$cfg['Servers'][$i]['relation'] = 'pma__relation';
$cfg['Servers'][$i]['table_info'] = 'pma__table_info';
$cfg['Servers'][$i]['table_coords'] = 'pma__table_coords';
$cfg['Servers'][$i]['pdf_pages'] = 'pma__pdf_pages';
$cfg['Servers'][$i]['column_info'] = 'pma__column_info';
$cfg['Servers'][$i]['history'] = 'pma__history';
$cfg['Servers'][$i]['tracking'] = 'pma__tracking';
$cfg['Servers'][$i]['table_uiprefs'] = 'pma__table_uiprefs';
$cfg['Servers'][$i]['recent'] = 'pma__recent';
#$cfg['Servers'][$i]['userconfig'] = 'pma__userconfig';
$cfg['Servers'][$i]['designer_coords'] = 'pma__designer_coords';
$cfg['Servers'][$i]['host'] = '192.168.2.50';
$cfg['Servers'][$i]['extension'] = 'mysqli';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['controluser'] = 'pma';
$cfg['Servers'][$i]['controlpass'] = 'heslo';
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['AllowNoPasswordRoot'] = true;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
$cfg['Servers'][$i]['pmadb'] = 'phpmyadmin';
$cfg['Servers'][$i]['verbose'] = 'phpMyAdmin demo - MariaDB';

/* Server localhost (config:root) [2] */
$i++;
$cfg['Servers'][$i]['bookmarktable'] = 'pma__bookmark';
$cfg['Servers'][$i]['relation'] = 'pma__relation';
$cfg['Servers'][$i]['table_info'] = 'pma__table_info';
$cfg['Servers'][$i]['table_coords'] = 'pma__table_coords';
$cfg['Servers'][$i]['pdf_pages'] = 'pma__pdf_pages';
$cfg['Servers'][$i]['column_info'] = 'pma__column_info';
$cfg['Servers'][$i]['history'] = 'pma__history';
$cfg['Servers'][$i]['tracking'] = 'pma__tracking';
$cfg['Servers'][$i]['table_uiprefs'] = 'pma__table_uiprefs';
$cfg['Servers'][$i]['recent'] = 'pma__recent';
#$cfg['Servers'][$i]['userconfig'] = 'pma__userconfig';
$cfg['Servers'][$i]['designer_coords'] = 'pma__designer_coords';
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['extension'] = 'mysqli';
$cfg['Servers'][$i]['socket'] = '/var/run/mysqld/mysqld.sock';
$cfg['Servers'][$i]['connect_type'] = 'socket';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['controluser'] = 'pma';
$cfg['Servers'][$i]['controlpass'] = 'heslo';
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['AllowNoPasswordRoot'] = true;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
$cfg['Servers'][$i]['pmadb'] = 'phpmyadmin';
$cfg['Servers'][$i]['verbose'] = 'phpMyAdmin demo - MySQL';

/* Server localhost (config:root) [3] */
$i++;
$cfg['Servers'][$i]['bookmarktable'] = 'pma__bookmark';
$cfg['Servers'][$i]['relation'] = 'pma__relation';
$cfg['Servers'][$i]['table_info'] = 'pma__table_info';
$cfg['Servers'][$i]['table_coords'] = 'pma__table_coords';
$cfg['Servers'][$i]['pdf_pages'] = 'pma__pdf_pages';
$cfg['Servers'][$i]['column_info'] = 'pma__column_info';
$cfg['Servers'][$i]['history'] = 'pma__history';
$cfg['Servers'][$i]['tracking'] = 'pma__tracking';
$cfg['Servers'][$i]['table_uiprefs'] = 'pma__table_uiprefs';
$cfg['Servers'][$i]['recent'] = 'pma__recent';
#$cfg['Servers'][$i]['userconfig'] = 'pma__userconfig';
$cfg['Servers'][$i]['designer_coords'] = 'pma__designer_coords';
$cfg['Servers'][$i]['host'] = '192.168.2.51';
$cfg['Servers'][$i]['extension'] = 'mysqli';
$cfg['Servers'][$i]['connect_type'] = 'tcp';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['controluser'] = 'pma';
$cfg['Servers'][$i]['controlpass'] = 'heslo';
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['AllowNoPasswordRoot'] = true;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
$cfg['Servers'][$i]['pmadb'] = 'phpmyadmin';
$cfg['Servers'][$i]['verbose'] = 'phpMyAdmin demo - Drizzle';

/* End of servers configuration */

$cfg['blowfish_secret'] = '123456';

$tmp_url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$tmp_dir = $tmp_url;
while ($tmp_dir != '' && $tmp_dir != '/') {
    $tmp_url = $tmp_dir;
    $tmp_dir = dirname($tmp_dir);
}

$GLOBALS['PMADEMO_DIR'] = $tmp_url;
$cfg['PmaAbsoluteUri'] = 'http://demo.phpmyadmin.net' . $tmp_url;
$cfg['Error_Handler']['display'] = true;
$cfg['Error_Handler']['gather'] = true;
$cfg['ShowPhpInfo'] = true;

$cfg['SuhosinDisableWarning'] = true;
$cfg['PmaNoRelation_DisableWarning'] = true;
$cfg['TranslationWarningThreshold'] = 95;
$cfg['ServerDefault'] = 2;
$cfg['CSPAllow'] = 'stats.cihar.com';
#$cfg['MaxDbList'] = 3;
?>
