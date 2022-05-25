<?php

$config['encryption_key'] = 'a46bad229bcf5d7eaeeaf41fe421b6d707c7ff07';
$config['session_crypt_key'] = '6966d8077337e62057087ddec71a8fca2990c77c';
$config['database'] = array(
    'expressionengine' => array(
        'hostname' => 'localhost',
        'database' => 'eeconftalk',
        'username' => 'root',
        'password' => '',
        'dbprefix' => 'exp_',
        'char_set' => 'utf8mb4',
        'dbcollat' => 'utf8mb4_unicode_ci',
        'port'     => ''
    ),
);

$config['show_ee_news'] = 'y';
$config['share_analytics'] = 'y';

$config['base_url'] = 'https://ee-conf-talk.test';
$config['base_path'] = '/home/doug/sites/ee-conf-talk';

$config['is_system_on'] = 'y';
$config['index_page'] = '';
$config['debug'] = '1';
$config['show_profiler'] = 'y';
$config['enable_devlog_alerts'] = 'n';
$config['cache_driver'] = 'dummy';

$config['enable_hit_tracking'] = 'n';
$config['dynamic_tracking_disabling'] = 'n';
$config['enable_entry_view_tracking'] = 'n';
$config['enable_online_user_tracking'] = 'n';

$config['theme_folder_url'] = '{base_url}/themes/';
$config['theme_folder_path'] = '{base_path}/public/themes/';

$config['avatar_url'] = '{base_url}/images/avatars';
$config['emoticon_url'] = '{base_url}/images/smileys/';
$config['avatar_path'] = '{base_path}/public/images/avatars/';

$config['captcha_url'] = '{base_url}/images/captchas/';
$config['captcha_path'] = '{base_path}/public/images/captchas/';

$config['sig_img_url'] = '{base_url}/images/signature_attachments/';
$config['sig_img_path'] = '{base_path}/public/images/signature_attachments/';

$config['prv_msg_upload_url'] = '{base_url}/images/pm_attachments';
$config['prv_msg_upload_path'] = '{base_path}/public/images/pm_attachments/';