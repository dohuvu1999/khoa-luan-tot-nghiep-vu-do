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
define( 'DB_NAME', 'db_demowordpress' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'E;3Fv6bbZ*U8nrQfD5Gmxs[dK7j5dt5y@!XWr1-JtM3V&j0/5Nl_LfDZ,wlk|LS}' );
define( 'SECURE_AUTH_KEY',  'uuiX;6.C3r7>{~0xu>m+u@fbV1~%3Nilx<uB#=AhtuGvDT<?l|s3lS+5_nr:8<Uv' );
define( 'LOGGED_IN_KEY',    '-/Q[qC~0waojt;+in/Su[N[(>[)v*%__x![H>?Sv!RBaZOF44[8`##za0DrY`7Qy' );
define( 'NONCE_KEY',        'lKA;$-8M~`w7aCawI9eEq};lO0nhdkZ2|:#]q5)`k!kgHa(Rrom8f|%~|}L6-T<0' );
define( 'AUTH_SALT',        'hi:xs|netx+_.FNPExJ:5,<4bubh9i@T;x@w5x|skUuk!<1FyF?b2VQW*nr&<EI2' );
define( 'SECURE_AUTH_SALT', 'Jn(v1eVpS*qg4*Zk4#f)xLytb=k_a1<<NzU>nRvlHhN !st:jt)ZD{_(TG|LF% >' );
define( 'LOGGED_IN_SALT',   'eb;>s[Cs)bBG:efRRlG`x+,x%);RE)h)4p]J!&,gl0<i}{V>c%B~J^Hw,epdL.c*' );
define( 'NONCE_SALT',       'S9TmcJo{R8Sth; [od7O9/!u|[q&3]8 @@jI$x4IRH3^e)4y!*`OAyB[YS6+^SYY' );

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
