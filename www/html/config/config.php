<?PHP
# Account Maker Config
$config['site']['serverPath'] = "/media/servidor/";
$config['site']['useServerConfigCache'] = false;
$config['site']['worlds'] = array(0 => 'Yurots');
$towns_list[0] = array(1 => 'Yurots', 2 => 'Gamemaster Isle');

$config['site']['outfit_images_url'] = '/outfit.php';
$config['site']['item_images_url'] = '/images/items/';
$config['site']['item_images_extension'] = '.gif';
$config['site']['flag_images_url'] = '/images/flags/';
$config['site']['flag_images_extension'] = '.png';
$config['site']['players_group_id_block'] = 3;
$config['site']['limitDeath'] = 8;
$config['site']['levelVideo'] = 100;

# PAGE: donate.php
$config['site']['usePagseguro'] = false; //true show / false hide
$config['site']['usePaypal'] = true;	//true show / false hide
$config['site']['useDeposit'] = true;	//true show / false hide
$config['site']['useZaypay'] = false;	//true show / false hide
$config['site']['useContenidopago'] = false;	//true show / false hide
$config['site']['useOnebip'] = false;	//true show / false hide

# Pagseguro config By IVENSPONTES
$config['pagSeguro']['email'] = "XXXXXXXXXXXXXX"; //Email Pagseguro
$config['pagSeguro']['token'] = "XXXXXXXXXXXX"; // TOKEN
$config['pagSeguro']['urlRedirect'] = 'http://localhost/index.php?subtopic=pagconcluido'; //turn off redirect and notifications in pagseguro.com.br
$config['pagSeguro']['urlNotification'] = 'http://localhost/retpagseguro.php'; //your return location

$config['pagSeguro']['productName'] = 'Premium Points';
$config['pagSeguro']['productValue'] = 1.00; 	// 1.50 = R$ 1,50 etc...
$config['pagSeguro']['doublePoints'] = false; 	## Double points - true is on / false is off

$config['pagSeguro']['host'] = 'localhost';		## YOUR HOST
$config['pagSeguro']['database'] = 'gesior860';	## DATABASE
$config['pagSeguro']['databaseUser'] = 'root';	## USER
$config['pagSeguro']['databasePass'] = 'test';		## PASSWORD

# Create Account Options
$config['site']['one_email'] = true;
$config['site']['create_account_verify_mail'] = false;
$config['site']['verify_code'] = false;
$config['site']['email_days_to_change'] = 3;
$config['site']['newaccount_premdays'] = 5;
$config['site']['send_register_email'] = false;

# Create Character Options
$config['site']['newchar_vocations'][0] = array(1 => 'Sorcerer Sample', 2 => 'Druid Sample', 3 => 'Paladin Sample', 4 => 'Knight Sample');
$config['site']['newchar_towns'][0] = array(1);
$config['site']['max_players_per_account'] = 10;


# Emails Config
$config['site']['send_emails'] = true;
$config['site']['mail_address'] = "xxx@xxxx.com.br";
$config['site']['smtp_enabled'] = true;
$config['site']['smtp_host'] = "smtp.xxxxx.com.br";
$config['site']['smtp_port'] = 587;
$config['site']['smtp_auth'] = true;
$config['site']['smtp_user'] = "xxx@xxx.com.br";
$config['site']['smtp_pass'] = "xxx";

# PAGE: whoisonline.php
$config['site']['private-servlist.com_server_id'] = 0;
/*
Server id on 'private-servlist.com' to show Players Online Chart (whoisonline.php page), set 0 to disable Chart feature.
To use this feature you must register on 'private-servlist.com' and add your server.
Format: number, 0 [disable] or higher
*/

# PAGE: characters.php
$config['site']['quests'] = array('Quest 100k' => 45109,'Dwarven Armor'=>45271,'Annihilator' => 42229,'Pits of Inferno Quest' => 45235,'Firewalker Boots Quest' => 45276,'Demon Helmet' => 45267,'Promotion Quest' => 45286,'Dwarven Legs Quest' => 45287,'Inquisition Quest' => 45253,'Demon Oak Quest' => 45297,'AURA Quest' => 25950,'Yalahari Quest' => 45259,'Wrath of the Emperor Quest' => 45263,'Canivete Quest' => 45348,'Ring Quest' => 45374,'Weapon Quest' => 45346,'Golden Helmet Quest' => 45353,'Shield Quest' => 45354,'Blessed Shield Quest' => 45357,'Classic Set Quest' =>45501,'Classic Helmet Quest' => 45455,'Classic Boots Quest' => 45456,'Classic Weapon Quest' => 45386);
$config['site']['show_skills_info'] = false;
$config['site']['show_vip_storage'] = 0;

# PAGE: accountmanagement.php
$config['site']['send_mail_when_change_password'] = false;
$config['site']['send_mail_when_generate_reckey'] = false;
$config['site']['generate_new_reckey'] = true;
$config['site']['generate_new_reckey_price'] = 10;

# PAGE: guilds.php
$config['site']['guild_need_level'] = 100;
$config['site']['guild_need_pacc'] = false;
$config['site']['guild_image_size_kb'] = 50;
$config['site']['guild_description_chars_limit'] = 2000;
$config['site']['guild_description_lines_limit'] = 6;
$config['site']['guild_motd_chars_limit'] = 250;

# PAGE: adminpanel.php
$config['site']['access_admin_panel'] = 3;
$config['site']['access_tickers'] = 3;
$config['site']['access_admin_painel'] = 3;
$config['site']['access_staff_painel'] = 3;

# PAGE: latestnews.php
$config['site']['news_limit'] = 5;

# PAGE: killstatistics.php
$config['site']['last_deaths_limit'] = 40;

# PAGE: team.php
$config['site']['groups_support'] = array(2, 3, 4, 5, 6, 7);

# PAGE: highscores.php
$config['site']['groups_hidden'] = array(4, 5, 6, 7);
$config['site']['accounts_hidden'] = array(1, 2);

# PAGE: shopsystem.php
$config['site']['shop_system'] = true;
$config['site']['shopguild_system'] = true;

# PAGE: lostaccount.php
$config['site']['email_lai_sec_interval'] = 180;

# Layout Config
$config['site']['layout'] = 'tibiarl';
$config['site']['vdarkborder'] = '#505050';
$config['site']['darkborder'] = '#D4C0A1';
$config['site']['lightborder'] = '#F1E0C6';
$config['site']['download_page'] = true;
$config['site']['serverinfo_page'] = true;

///Lista de itens Characters
///exemplo
//$config['site']['itensname'] = array(ID DO ITEM => 'DESCRIÇÃO DO ITEM',ID DO ITEM => 'DESCRIÇÃO DO ITEM');
$config['site']['itensname'] = array(
	//vip boots
	12859 => '(Arm: 3, speed +20, +15mp/1sec, +10hp/1sec).<br>It weighs 10.00 oz.<br><br><font color="green"><b><big>Item VIP</big></b></font>',
	//vip helmet
	12861 => '(Arm: 11, speed +5, protection all +3%, +1mp/1sec, +1hp/1sec).<br>It weighs 27.60 oz.<br><br><font color="green"><b><big>Item VIP</big></b></font>',
	//Claw Ring
	12890 => '(Arm:2, club fighting +3, sword fighting +3, axe fighting +3, distance fighting +3, shielding +3, protection all +2%, speed +10).<br>It can only be wielded properly by elite knights and royal paladins.<br>It weighs 10.00 oz.<br>Use this item to gain +3 skill for 15 minutes.<br><br><font color="green"><b><big>Item VIP</big></b></font>',
	//Claw Ring
	12891 => '(Arm:2, club fighting +3, sword fighting +3, axe fighting +3, distance fighting +3, shielding +3, protection all +2%, speed +10).<br>It can only be wielded properly by elite knights and royal paladins.<br>It weighs 10.00 oz.<br>Use this item to gain +3 skill for 15 minutes.<br><br><font color="green"><b><big>Item VIP</big></b></font>',
	//Serpent Ring
	12892 => '(Arm:2, shielding +3, magic level +3, protection all +2%, speed +10).<br>It can only be wielded properly by master sorcerers and elder druids.<br>It weighs 8.00 oz.<br>Use this item to gain +3 magic level for 15 minutes.<br><br><font color="green"><b><big>Item VIP</big></b></font>');
?>