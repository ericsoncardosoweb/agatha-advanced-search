<?php if ( !defined( 'ABSPATH' ) ) die( "Cannot access files directly." ); ?>

<?php include dirname(__FILE__)."/admin_header.tpl.php"; ?>
<tr valign="top">
<th scope="row"><?php _e("Valor máximo de resultados exibidos", 'agatha-advanced-search'); ?></th>

<td><input type="text" name="agatha-advanced-search_max_results" id="agatha-advanced-search_max_results" value="<?php echo $maxResults; ?>" class="regular-text code" /><span class="setting-description"><?php _e(" Insira &quot;0&quot; para exibir todos os resultados correspondentes", 'agatha-advanced-search'); ?></span></td>
</tr>

<tr valign="top">
<th scope="row"><?php _e("Caracteres mínimos antes da pesquisa", 'agatha-advanced-search'); ?></th>

<td>
<select name="agatha-advanced-search_minchars">
<option value="1" <?php selected($minCharsToSearch, 1); ?>><?php _e("Pesquisar imediatamente", 'agatha-advanced-search'); ?></option>
<option value="2" <?php selected($minCharsToSearch, 2); ?>><?php _e("Aguarde 2 caracteres", 'agatha-advanced-search'); ?></option>
<option value="3" <?php selected($minCharsToSearch, 3); ?>><?php _e("Aguarde 3 caracteres", 'agatha-advanced-search'); ?></option>
<option value="4" <?php selected($minCharsToSearch, 4); ?>><?php _e("Aguarde 4 caracteres", 'agatha-advanced-search'); ?></option>
</select>
</td>
</tr>


<tr valign="top">
<th scope="row"><?php _e("Direção dos resultados", 'agatha-advanced-search'); ?></th>

<td><input type="radio" name="agatha-advanced-search_results_direction" id="agatha-advanced-search_results_direction_down" value="down" <?php checked(empty($resultsDirection)); checked($resultsDirection, 'down'); ?> /> <label for="agatha-advanced-search_results_direction_down"><?php _e("Para baixo", 'agatha-advanced-search'); ?></input></label>

<input type="radio" name="agatha-advanced-search_results_direction" id="agatha-advanced-search_results_direction_up" value="up" <?php checked($resultsDirection, 'up'); ?> /> <label for="agatha-advanced-search_results_direction_up"><?php _e("Para cima", 'agatha-advanced-search'); ?></label><br /><span class="setting-description"><?php _e("Quando os resultados da pesquisa são exibidos, em qual direção a caixa de resultados deve ser estendida da caixa de pesquisa?", 'agatha-advanced-search'); ?></span></td>
</tr>

<!-- WP E-Commerce -->
<?php if(defined('WPSC_VERSION')) : ?>
<tr valign="top">
<td colspan="2"><h3><?php _e("WP E-Commerce", 'agatha-advanced-search'); ?></h3></td>
</tr>

<tr valign="top">
<th scope="row"> </th>
<td>
    <div><span class="setting-description"><?php printf(__("When used with the %sWP E-Commerce%s plugin, Dave&apos;s WordPress Live Search can search your product catalog instead of posts & pages.", 'agatha-advanced-search'), '<a href="http://getshopped.org/">', '</a>'); ?></span></div>
    <table>
        <tr><td><input type="radio" id="agatha-advanced-search_source_1" name="agatha-advanced-search_source" value="0" <?php checked($searchSource, 0); ?> /> <label for="agatha-advanced-search_source_1"><?php _e("Search posts &amp; pages", 'agatha-advanced-search'); ?></label></td></tr>
        <tr><td><input type="radio" id="agatha-advanced-search_source_2" name="agatha-advanced-search_source" value="1" <?php checked($searchSource, 1); ?> /> <label for="agatha-advanced-search_source_2"><?php _e("Search products", 'agatha-advanced-search'); ?></label></td></tr>
    </table>

</td>
</tr>
<?php else : ?>
<input type="hidden" name="agatha-advanced-search_source" value="0" />
<?php endif; ?>

<!-- Submit buttons -->
<tr valign="top">
<td colspan="2"><div style="border-top: 1px solid #333;margin-top: 15px;padding: 5px;">
	<?php submit_button( NULL, 'primary', 'agatha-advanced-search_submit', false, array('id' => 'agatha-advanced-search_submit') ); ?>
</div></td>
</tr>

</tbody></table>

</form>

<?php include dirname(__FILE__)."/admin_footer.tpl.php"; ?>
</div>