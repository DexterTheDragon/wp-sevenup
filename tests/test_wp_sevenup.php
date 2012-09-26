<?php

/**
 *
 */
class WP_Test_WP_Sevenup_Tests extends WP_UnitTestCase
{

    function test_option_defaults()
    {
        $this->assertEquals(get_option('sevenup_enableClosing'), 'true');
        $this->assertEquals(get_option('sevenup_enableQuitBuggingMe'), 'true');
        $this->assertEquals(get_option('sevenup_overlayColor'), '#000000');
        $this->assertEquals(get_option('sevenup_lightboxColor'), '#ffffff');
        $this->assertEquals(get_option('sevenup_lightboxBorder'), '#6699ff');
        $this->assertEquals(get_option('sevenup_downloadLink'), '');
        $this->assertEquals(get_option('sevenup_overrideLightbox'), 'false');
        $this->assertEquals(get_option('sevenup_lightboxHTML'), '');
        $this->assertEquals(get_option('sevenup_showToAllBrowsers'), 'false');
    }

    function test_register_settings()
    {
        $this->markTestIncomplete();
    }

    function test_it_registers_wp_head_action() {
        $this->assertGreaterThan( 0, has_filter( 'wp_head', 'sevenup_header' ) );
    }

    function test_it_registers_admin_menu_action() {
        $this->assertGreaterThan( 0, has_filter( 'admin_menu', 'sevenup_menu' ) );
    }

    function test_it_registered_the_settings_page()
    {
        $current_user = get_current_user_id();
        wp_set_current_user( $this->factory->user->create( array( 'role' => 'administrator' ) ) );

        sevenup_menu();
        $this->assertEquals('http://example.org/wp-admin/plugins.php?page=wp-sevenup', menu_page_url('wp-sevenup', false));

        wp_set_current_user($current_user);
    }

    function test_sevenup_header()
    {
        $expected = <<<HTML
<!--[if lte IE 6]>
    <script type="text/javascript" src="http://example.org/wp-content/plugins/wp-sevenup/scripts/sevenup.0.3.min.js"></script>
    <script type="text/javascript" src="http://example.org/wp-content/plugins/wp-sevenup/scripts/sevenup_black.0.3.min.js"></script>
    <script type="text/javascript">
        var SEVENUP_OPTIONS = {
            enableClosing: true,
            enableQuitBuggingMe: true,
            overlayColor: "#000000",
            lightboxColor: "#ffffff",
            lightboxBorder: "#6699ff",
            downloadLink: "",
            overrideLightbox: false,
            showToAllBrowsers: false,
            lightboxHTML: ""
        };
        window.onload=function(){
            sevenUp.plugin.black.test(SEVENUP_OPTIONS);
        };
    </script>
<![endif]-->
HTML;
        $actual = get_echo('sevenup_header');
        $this->assertEquals(strip_ws($expected), strip_ws($actual));

    }
}
