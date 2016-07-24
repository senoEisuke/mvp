<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wpdb');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wquser');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'tr1a1');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'h}YTrQ|7-cH5KTZb/.p.<!+H[2/;moP-VChpGKU-h:<TI/EbX`bvSZ:eFzI9D}m/');
define('SECURE_AUTH_KEY',  'gZePL]!A}o3szCmA>6)XVwF UT6l;i_zS3Tu(P2;$,msQ;Nb|4c1{6Xjw7:$FtG-');
define('LOGGED_IN_KEY',    'b/|@%`bI5T_U+x8p4iCIrw~;*_t&8&h& /kZ2pv|_zz4q{xLFQ_(+dos(prQY[JV');
define('NONCE_KEY',        '?*WNT7JF,G.?!Xrnagc?#Cy&C6|&{{xOz7cj+w*5KM)W6>.xA=>aAQ5AaO6]VMX+');
define('AUTH_SALT',        '`)Rt&QM.(OQ5T1S.8oM69,>A!hNzD*7E&Wt>Rr6[o_[H8KdC|ns(-9hs-+GgAN4u');
define('SECURE_AUTH_SALT', 'P4sIpD1i?8}_gJ%D;U@tBjf`s,Y-Fof$g@Kc{w|1Bj,F)iU,-42f@Ue<Mj5,qlyj');
define('LOGGED_IN_SALT',   'k[mJ_1#@!HyWu0bMr,p|0is2B=x>P CJGu|T?|qp5S<iG9GiHc$*SCg<KWJ9:Umo');
define('NONCE_SALT',       '1:FcNqLL-jowy33yQ,+&tRqG)Eq(jWhP>g9.$xnc9Z;|d7;!Te~9G={c8y|:81h,');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
