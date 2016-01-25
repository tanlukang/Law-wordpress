<?php
/*
Plugin Name: Download Csv file
Plugin URI: http://blog.vita-engine.com
Description: Download the user file
Version: 1.0.0
Author: RadioHT(Hanting Cong)
Author URI: http://blog.vita-engine.com
License: GPL
*/
?>
<?php
if( is_admin() ) {
    /*  利用 admin_menu 钩子，添加菜单 */
    add_action('admin_menu', 'display_downloadcsv_menu');
}

function display_downloadcsv_menu() {
    /* add_options_page( $page_title, $menu_title, $capability, $menu_slug, $function);  */
    /* 页名称，菜单名称，访问级别，菜单别名，点击该菜单时的回调函数（用以显示设置页面） */
    add_menu_page('Download CsvFile', 'DownloadCsv', 'administrator','DownloadCsv', 'display_copyright_html_page');
}

function display_copyright_html_page() {
    $download_link = site_url()."/download.php";
    ?>
    <div>
        <h2>Download Csv File</h2>
        <div>
            <a class="button-primary" href="<?php echo $download_link; ?>" >click here to download</a>
        </div>
    </div>
<?php
}1
?>
