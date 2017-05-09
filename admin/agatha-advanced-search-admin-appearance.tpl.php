<?php if ( !defined( 'ABSPATH' ) ) die( "Cannot access files directly." ); ?>

<?php include dirname( __FILE__ ) . "/admin_header.tpl.php"; ?>
<tr valign="top">
<th scope="row"><?php _e( "Exibir metadados", 'agatha-advanced-search' ); ?></th>

<td>
    <input type="hidden" name="agatha-advanced-search_display_post_meta" value="" />
    <input type="checkbox" name="agatha-advanced-search_display_post_meta" id="agatha-advanced-search_display_post_meta" value="true" <?php checked( $displayPostMeta ); ?> /> <label for="agatha-advanced-search_display_post_meta"><?php _e( "Exibição autor e data para cada resultado da pesquisa", 'agatha-advanced-search' ); ?></label>
</td>
</tr>

<!-- Display post thumbnail -->
<tr valign="top">
<th scope="row"><?php _e( "Exibir Thumbnail", 'agatha-advanced-search' ); ?></th>

<td>
    <input type="hidden" name="agatha-advanced-search_thumbs" value="" />
    <input type="checkbox" name="agatha-advanced-search_thumbs" id="agatha-advanced-search_thumbs" value="true" <?php checked( $showThumbs ); ?> /> <label for="agatha-advanced-search_thumbs"><?php _e( " Exibir imagens em miniatura para cada resultado de pesquisa com pelo menos uma imagem", 'agatha-advanced-search' ); ?></label>
</td>
</tr>

<!-- Display post excerpt -->
<tr valign="top">
<th scope="row"><?php _e( "Exibir resumo", 'agatha-advanced-search' ); ?></th>

<td>
    <input type="hidden" name="agatha-advanced-search_excerpt" value="" />
    <input type="checkbox" name="agatha-advanced-search_excerpt" id="agatha-advanced-search_excerpt" value="true" <?php checked( $showExcerpt ); ?> /> <label for="agatha-advanced-search_excerpt"><?php printf( __( "Exibir um trecho para cada resultado da pesquisa. Se o post não tem uma, use o primeiro %s caracteres.", 'agatha-advanced-search' ), "<input type=\"text\" name=\"agatha-advanced-search_excerpt_length\" id=\"agatha-advanced-search_excerpt_length\" value=\"$excerptLength\" size=\"3\" />"); ?></label>
</td>
</tr>

<!-- Display 'more results' -->
<tr valign="top">
<th scope="row"><?php _e( "Exibir botão 'ver mais resultados'", 'agatha-advanced-search' ); ?></th>

<td>
    <input type="hidden" name="agatha-advanced-search_more_results" value="" />
    <input type="checkbox" name="agatha-advanced-search_more_results" id="agatha-advanced-search_more_results" value="true" <?php checked( $showMoreResultsLink ); ?> /> <label for="agatha-advanced-search_more_results"><?php _e( "Mostrar um botão após os resultados da pesquisa.", 'agatha-advanced-search' ); ?></label>
</td>
</tr>

<!-- CSS styles -->
<tr valign="top">
<td colspan="2"><h3><?php _e( "Estilos", 'agatha-advanced-search' ); ?></h3></td>
</tr>

<tr valign="top">
<th scope="row"> </th>
<td>
<input type="radio" name="agatha-advanced-search_css" id="agatha-advanced-search_css_default_gray" value="default_gray" <?php checked( $cssOption, 'default_gray' ); ?> /> <label for="agatha-advanced-search_css_default_gray"><?php _e( "Padrão do Plugin", 'agatha-advanced-search' ); ?></label><br /><span class="setting-description"><?php _e( "Padrão de Estilo do Plugin", 'agatha-advanced-search' ); ?></span>
<br /><br />

<?php if( $color_picker_supported ) : ?>

<input type="radio" name="agatha-advanced-search_css" id="agatha-advanced-search_css_custom" value="custom" <?php checked( $cssOption, 'custom' ); ?> /> <label for="agatha-advanced-search_css_custom"><?php _e( "Personalizado", 'agatha-advanced-search' ); ?></label><br /><span class="setting-description"><?php _e( "Personalize a exibição de resultados de pesquisa aqui", 'agatha-advanced-search' ); ?></span>

<div id="custom_colors" style="display:none;">

<div id="aas_design_preview">
<ul class="search_results aas_search_results" style="display: block;"><input type="hidden" name="query" value="sample"><li class="agatha-advanced-search_result"><a href="#" class="agatha-advanced-search_title">Sample Page</a><p class="excerpt clearfix"></p><p>This is an example page. It’s different from a blog post because it will stay in one place and will [...]</p> <p></p><p class="meta clearfix" id="agatha-advanced-search_author">Posted by Admin</p><p id="agatha-advanced-search_date" class="meta clearfix">December 5, 2012</p><div class="clearfix"></div></li><div class="clearfix search_footer aas_search_footer"><a href="#">View more results</a></div></ul>
</div>

<div id="custom_colors_options">

<div><label><?php _e("Largura (em pixels)", 'agatha-advanced-search'); ?></label><input type="number" name="agatha-advanced-search_custom[width]" id="agatha-advanced-search_custom_width" value="<?php if(!empty($customOptions['width'])) echo $customOptions['width']; else echo "250" ?>" /></div>

<div><label><?php _e("Título", 'agatha-advanced-search'); ?></label><input type="text" name="agatha-advanced-search_custom[title]" id="agatha-advanced-search_custom_title" value="<?php if(!empty($customOptions['title'])) echo $customOptions['title']; ?>" data-default-color="#000" class="aas_color_picker" pattern="^#[0-9,a-f]{3,6}" /></div>

<div><label><?php _e("Resumo", 'agatha-advanced-search'); ?></label><input type="text" name="agatha-advanced-search_custom[fg]" id="agatha-advanced-search_custom_fg" value="<?php if(!empty($customOptions['fg'])) echo $customOptions['fg']; ?>" data-default-color="#000" class="aas_color_picker" pattern="^#[0-9,a-f]{3,6}" /></div>

<div><label><?php _e("Background", 'agatha-advanced-search'); ?></label><input type="text" name="agatha-advanced-search_custom[bg]" id="agatha-advanced-search_custom_bg" value="<?php if(!empty($customOptions['bg'])) echo $customOptions['bg']; ?>" data-default-color="#ddd" class="aas_color_picker" pattern="^#[0-9,a-f]{3,6}" /></div>

<div><label><?php _e("Hover Background", 'agatha-advanced-search'); ?></label><input type="text" name="agatha-advanced-search_custom[hoverbg]" id="agatha-advanced-search_custom_hoverbg" value="<?php if(!empty($customOptions['hoverbg'])) echo $customOptions['hoverbg']; ?>" data-default-color="#fff" class="aas_color_picker" pattern="^#[0-9,a-f]{3,6}" /></div>

<div><label><?php _e("Divider", 'agatha-advanced-search'); ?></label><input type="text" name="agatha-advanced-search_custom[divider]" id="agatha-advanced-search_custom_divider" value="<?php if(!empty($customOptions['divider'])) echo $customOptions['divider']; ?>" data-default-color="#aaa" class="aas_color_picker" pattern="^#[0-9,a-f]{3,6}" /></div>

<div><label><?php _e("Footer Background", 'agatha-advanced-search'); ?></label><input type="text" name="agatha-advanced-search_custom[footbg]" id="agatha-advanced-search_custom_footbg" value="<?php if(!empty($customOptions['footbg'])) echo $customOptions['footbg']; ?>" data-default-color="#888" class="aas_color_picker" pattern="^#[0-9,a-f]{3,6}" /></div>

<div><label><?php _e("Footer Text", 'agatha-advanced-search'); ?></label><input type="text" name="agatha-advanced-search_custom[footfg]" id="agatha-advanced-search_custom_footfg" value="<?php if(!empty($customOptions['footfg'])) echo $customOptions['footfg']; ?>" data-default-color="#fff" class="aas_color_picker" pattern="^#[0-9,a-f]{3,6}" /></div>

<div><label><?php _e("Shadow", 'agatha-advanced-search'); ?></label><input type="checkbox" name="agatha-advanced-search_custom[shadow]" id="agatha-advanced-search_custom_shadow" value="true" class="aas_design_toggle" <?php checked(!empty($customOptions['shadow'])); ?> /></div>

</div>

</div>
<br /><br />

<?php endif; ?>

<input type="radio" name="agatha-advanced-search_css" id="agatha-advanced-search_css_existing_theme" value="notheme" <?php checked($cssOption, 'notheme'); ?> /> <label for="agatha-advanced-search_css_theme"><?php _e("Usar folha de estilo do tema", 'agatha-advanced-search'); ?></label><br /><span class="setting-description"><strong><?php _e("Para usuários avançados:", 'agatha-advanced-search'); ?>:</strong> <?php _e("Use os estilos contidos no estilo do seu tema. Não inclua uma folha de estilo separada para Ágatha Advanced Search.", 'agatha-advanced-search'); ?>
</td>
</tr>

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