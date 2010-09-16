<div class="wrap">
    <h2>WP-SevenUp</h2>

    <form method="post" action="options.php">
        <?php settings_fields('sevenup-options'); ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">enableClosing</th>
                <td>
                    <select name="enableClosing">
                        <option value='true' <?php echo get_option('sevenup_enableClosing')=='true' ? 'selected="selected"' : '';?>>true</option>
                        <option value='false' <?php echo get_option('sevenup_enableClosing')=='false' ? 'selected="selected"' : '';?>>false</option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">enableQuitBuggingMe</th>
                <td>
                    <select name="enableQuitBuggingMe">
                        <option value='true' <?php echo get_option('sevenup_enableQuitBuggingMe')=='true' ? 'selected="selected"' : '';?>>true</option>
                        <option value='false' <?php echo get_option('sevenup_enableQuitBuggingMe')=='false' ? 'selected="selected"' : '';?>>false</option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">overlayColor</th>
                <td><input type="text" name="overlayColor" value="<?php echo get_option('sevenup_overlayColor'); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row">lightboxColor</th>
                <td><input type="text" name="lightboxColor" value="<?php echo get_option('sevenup_lightboxColor'); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row">lightboxBorder</th>
                <td><input type="text" name="lightboxBorder" value="<?php echo get_option('sevenup_lightboxBorder'); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row">downloadLink</th>
                <td><input type="text" name="downloadLink" value="<?php echo get_option('sevenup_downloadLink'); ?>" /></td>
            </tr>

            <tr valign="top">
                <th scope="row">overrideLightbox</th>
                <td>
                    <select name="overrideLightbox">
                        <option value='true' <?php echo get_option('sevenup_overrideLightbox')=='true' ? 'selected="selected"' : '';?>>true</option>
                        <option value='false' <?php echo get_option('sevenup_overrideLightbox')=='false' ? 'selected="selected"' : '';?>>false</option>
                    </select>
                </td>
            </tr>

            <tr valign="top">
                <th scope="row">lightboxHTML</th>
                <td><textarea name="lightboxHTML"><?php echo get_option('sevenup_lightboxHTML'); ?></textarea></td>
            </tr>

            <tr valign="top">
                <th scope="row">showToAllBrowsers</th>
                <td>
                    <select name="showToAllBrowsers">
                        <option value='true' <?php echo get_option('sevenup_showToAllBrowsers')=='true' ? 'selected="selected"' : '';?>>true</option>
                        <option value='false' <?php echo get_option('sevenup_showToAllBrowsers')=='false' ? 'selected="selected"' : '';?>>false</option>
                    </select>
                </td>
            </tr>

        </table>

        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>

    </form>
</div>
