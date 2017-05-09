<?php if ( !defined( 'ABSPATH' ) ) die( "Cannot access files directly." ); ?>

<?php include dirname( __FILE__ ) . "/admin_header.tpl.php"; ?>
<tr valign="top">
<th scope="row"><?php _e( "Exceptions", 'agatha-advanced-search' ); ?></th>

<td>
<?php $permalinkFormat = get_option( 'permalink_structure' ); ?>

<div><span class="setting-description"><?php printf( __( "Digite os %s de páginas que não deveriam ter a pesquisa ao vivo, um por linha. O asterisco * pode ser utilizado no início ou no final de uma linha. Por exemplo: %s", 'agatha-advanced-search' ), empty( $permalinkFormat ) ? __( 'paths', 'agatha-advanced-search' ) : __( 'permalinks' ), '<ul style="list-style-type:disc;margin-left: 3em;">' . empty( $permalinkFormat ) ? '<li>?page_id=123</li><li>page_id=1*</li>' : '<li>about</li><li>employee-*</li>' . '</ul>' ); ?>

<p><strong><?php _e( "NOTA", 'agatha-advanced-search' ); ?>:</strong> <?php _e( "Estas páginas ainda serão devolvidos nos resultados da pesquisa. Isso só desativa o recurso do Live Search para a caixa de pesquisa nestas páginas.", 'agatha-advanced-search' ); ?></p></span></div>
<textarea name="agatha-advanced-search_exceptions" id="agatha-advanced-search_exceptions" rows="5" cols="60"><?php echo $exceptions; ?></textarea></td>
</tr>

<!-- X Offset -->
<tr valign="top">
<th scope="row"><?php _e( "Caixa de pesquisa Resultados deslocamento X", 'agatha-advanced-search' ); ?></th>

<td>
<div><span class="setting-description"><?php _e( "Utilize esta definição para mover a caixa de resultados da pesquisa para a esquerda ou direita para alinhar exatamente com o campo de busca do seu tema. O valor é em pixels. Os valores negativos mover a caixa à esquerda, valores positivos movê-lo para a direita.", 'agatha-advanced-search' ); ?></span></div>

<input type="text" name="agatha-advanced-search_xoffset" id="agatha-advanced-search_xoffset" value="<?php echo $xOffset; ?>"</td>
</tr>

<!-- Y Offset -->
<tr valign="top">
<th scope="row"><?php _e( "Caixa de pesquisa Resultados deslocamento em Y", 'agatha-advanced-search' ); ?></th>

<td>
<div><span class="setting-description"><?php _e( "Utilize esta definição para mover os resultados da pesquisa caixa cima ou para baixo para alinhar exatamente com o campo de busca do seu tema. O valor é em pixels. Os valores negativos mover a caixa para cima, valores positivos movê-lo para baixo.", 'agatha-advanced-search' ); ?></span></div>

<input type="text" name="agatha-advanced-search_yoffset" id="agatha-advanced-search_yoffset" value="<?php echo $yOffset; ?>"</td>
</tr>

<!-- Apply the_content filter -->
<tr valign="top">
<th scope="row"><?php _e( "Ativar filtro de conteúdo", 'agatha-advanced-search' ); ?></th>

<td><input type="checkbox" name="agatha-advanced-search_apply_content_filter" id="agatha-advanced-search_apply_content_filter" value="true" <?php checked( $applyContentFilter ); ?> /> <label for="agatha-advanced-search_apply_content_filter"><?php _e("Permitir que outros plugins para filtrar o conteúdo antes de procurar uma miniatura. Isto irá afetar o desempenho Live Search, portanto, apenas permitir que isso se você realmente precisa dele.", 'agatha-advanced-search'); ?></label></td>
</tr>

<!-- Submit buttons -->
<tr valign="top">
<td colspan="2"><div style="border-top: 1px solid #333;margin-top: 15px;padding: 5px;">
	<?php submit_button( NULL, 'primary', 'agatha-advanced-search_submit', false, array( 'id' => 'agatha-advanced-search_submit' ) ); ?>
</div></td>
</tr>

</tbody></table>

</form>
<?php include dirname( __FILE__ ) . "/admin_footer.tpl.php"; ?>
</div>
