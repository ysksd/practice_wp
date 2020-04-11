<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp_sample' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kc!4yf)^V0euri#$els?(18qg%]4.jM9-LCd@2HF}`8Mw}g^;e_jDBoc98k}b.9x' );
define( 'SECURE_AUTH_KEY',  'l_js*Q/k6Z7-*{580PP1Y%4)TD|XLvgyU(pF?@0U^JL~pzvMSefw@=3r|W2Z/*ml' );
define( 'LOGGED_IN_KEY',    '2W$V65JUvEdjvBW4|Tf2m,+6^131v?UK%$+L#HY_Aq#XQjAegf,?pBko%_+DA+u}' );
define( 'NONCE_KEY',        'Gt?NANj=mQOim5#|G>g6N.%E:)@}!t(Tc)2yGoO7tbs#T<qWUH0xV{2iM5jc1_y1' );
define( 'AUTH_SALT',        '$L4,Q2B3ztRWQYPUR[Moz)6P@iJ?lR`h0%^0D0L?DVZf,p|U?tSt}XkpUIv/ BYU' );
define( 'SECURE_AUTH_SALT', '$/loz-Fx0~6<6UA>i!pS%YgU?_G[:c%p*f01U5gRBA`X8w#J_ta$hoC]}2ajOROu' );
define( 'LOGGED_IN_SALT',   'y,@2`dQMe(emt.}/_T] wW2_ij{{9n0b2k/rlmPar@L:(T*9=$_U`yD31|xv[FX.' );
define( 'NONCE_SALT',       'T$n*R_1k]d~v:!L&H,mm_UeN.yIFp:wu:czS!g9o8o~|+4T#G*%5{0d}eX7XFM<7' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
