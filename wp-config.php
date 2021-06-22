<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'root' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pnXkqW+E#NUrS2kyc{Ikhy;rIZGhdE fj:J7c5g,hR$xqc|<J{3$6z5F==0*lF&A' );
define( 'SECURE_AUTH_KEY',  'j |=aQD@EK+X6b4-s<XayigBVjHA%Ha)hJB,]5>NY84JELCJwLfbm [w5(Q6!=nd' );
define( 'LOGGED_IN_KEY',    'SBQQBYHQ5<33DVt85!PQ;V&lu_c++IRRhP$Zi:3{cBi#5;99c-*-^V{%IP$nJO =' );
define( 'NONCE_KEY',        'B&kfU1%jlm -U1]#UU%j?j3VEbxcOAOz$exlHf5d.%;1a@m4me--|jCV-|_]iOmj' );
define( 'AUTH_SALT',        ',ndt=L;?:9&,[ihZ-P}Q]~b0y[{wS<L(:0bnXa3A-3! :n-oQ9,hoU[*MXOlC6JC' );
define( 'SECURE_AUTH_SALT', 'p^EwMZ4+_a:u)B66+[5z##8swe5bCy0,C]Z!*[[kLfQ;:r*?XY9wS?$,mvR3*7vk' );
define( 'LOGGED_IN_SALT',   '!fr@*..QLT:T?s9x?(L^K@2M12XY7.WvRvux1n@6M*z#-RCPnh{V0D:@Hg^1;RU{' );
define( 'NONCE_SALT',       '=4zz(e7T8-D+1Y|.!e{>aB~D^oGN*`=cebHSBK/.2A;YdoodclezZPOyYd$=xh8q' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
