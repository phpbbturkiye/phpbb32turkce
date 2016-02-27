<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Verimli bir önbellek olması için yapılandırma seçeneği değişikliklerinin çok sık olmasını isterseniz bu seçeneği ayarlayın.',
	'CLI_CONFIG_CURRENT'				=> 'Şu anki yapılandırma değeri, belirli boolean değerleri için 0 ve 1 kullanın',
	'CLI_CONFIG_DELETE_SUCCESS'			=> '%s yapılandırması başarıyla silindi.',
	'CLI_CONFIG_NEW'					=> 'Yeni yapılandırma değeri, belirli boolean değerleri için 0 ve 1 kullanın',
	'CLI_CONFIG_NOT_EXISTS'				=> '%s yapılandırması mevcut değil',
	'CLI_CONFIG_OPTION_NAME'			=> 'Yapılandırma seçeneği’nin adı',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Eğer değer en sonda yeni bir satır olmadan yazdırılmış olması gerekiyorsa bu seçeneği ayarlayın.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Arttırılacak miktar',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> '%s yapılandırması başarıyla arttırıldı',
	'CLI_CONFIG_SET_FAILURE'			=> '%s yapılandırması ayarlanamamıyor',
	'CLI_CONFIG_SET_SUCCESS'			=> '%s yapılandırması başarıyla ayarlandı',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Hazır ve hazır olmayan kron işlerinin bir listesini yazdırır.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Tüm hazır kron görevlerini çalıştırır.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Çalıştırılacak görevin adı',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Kurulmuş ve mevcut tüm migrasyonları listele.',	
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Migrasyonları uygulayarak veritabanını günceller.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Bir migrasyona geri dön.',	
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Bir yapılandırma seçeneğini siler',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Belirtilen eklentiyi devre dışı bırakır.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Belirtilen eklentiyi etkinleştirir.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Bağlı olmayan migrasyonları bulur.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Bir yapılandırma seçeneğinin değerini alır',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Bir yapılandırma seçeneğinin tamsayı değerini arttırır',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Dosya sistemi üzerinde ve veritabanı içerisindeki tüm eklentileri listeler.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Ortam adı.',	
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Güvenli Mod’da çalıştır (eklentiler olmadan).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Shell’i başlat.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Belirtilen eklentiyi temizler.',
	'CLI_DESCRIPTION_REPARSER_LIST'				=> 'Yeniden ayrıştırma olabilmesi için metin türlerini listeler.',
	'CLI_DESCRIPTION_REPARSER_REPARSE'			=> 'Geçerli text_formatter servisi ile depolanan metni yeniden ayrıştırır.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'	=> 'Yeniden ayrıştırma için metin türü. Her şeyi yeniden ayrıştırmak için boş bırakın.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Herhangi bir değişikliği kaydetmeyin; sadece olacak şeyleri yazdırın',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'İşlem için en düşük kayıt ID numarası',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'İşlem için en yüksek kayıt ID numarası',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Bir kerede işlemek için yaklaşık kayıt sayısı',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Son uygulamanın durdurulduğu yerden yeniden ayrıştırmaya başla',	
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Kullanıcı tablosunun user_email_hash sütununu yeniden hesaplar.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Eğer sadece eski eşleşen değer geçerliyse bir yapılandırma seçeneğinin değerini ayarlar',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Bir yapılandırma seçeneğinin değerini ayarlar',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'		=> 'Varolan tüm küçük resimleri sil.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'	=> 'Eksik olan tüm küçük resimleri oluştur.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'	=> 'Tüm küçük resimleri yeniden oluştur.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> '%s eklentisi devre dışı bırakılamadı',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> '%s eklentisi başarıyla devre dışı bırakıldı',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> '%s eklentisi etkinleştirilemedi',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> '%s eklentisi başarıyla etkinleştirildi',
	'CLI_EXTENSION_NAME'				=> 'Eklentinin adı',
	'CLI_EXTENSION_PURGE_FAILURE'		=> '%s eklentisi temizlenemedi',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> '%s eklentisi başarıyla temizlendi',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Hiç bir eklenti bulunamadı.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Mevcut',
	'CLI_EXTENSIONS_DISABLED'			=> 'Devre dışı bırakıldı',
	'CLI_EXTENSIONS_ENABLED'			=> 'Etkinleştirildi',	

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Tüm e-posta hashleri başarıyla yeniden hesaplandı.',

	'CLI_MIGRATION_NAME'					=> 'Ad alanı içeren migrasyon adı (sorunları önlemek için ters slaş (eğik çizgi) yerine düz slaş kullanın).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Mevcut migrasyonlar',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Kurulmuş migrasyonlar',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Sadece mevcut migrasyonları göster',
	'CLI_MIGRATIONS_EMPTY'                  => 'Hiç bir migrasyon yok.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> '%1$s yeniden ayrıştırılıyor (%2$d..%3$d aralığı)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> '%s yeniden ayrıştırılıyor...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Yeniden ayrıştırma başarıyla tamamlandı',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) silindi.',
	'CLI_THUMBNAIL_DELETING'	=> 'Küçük resimler siliniyor',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) atlandı.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) oluşturuldu.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Küçük resimler oluşturuluyor',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Tüm küçük resimler yeniden oluşturuldu.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Tüm küçük resimler silindi.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'Oluşturulacak hiç bir küçük resim yok.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'Silinecek hiç bir küçük resim yok.',
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' İsteğe bağlı olarak sadece belirli cron görevini çalıştırmak için bir cron görev adı belirtebilirsiniz.',
));
