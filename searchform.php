<?php
/**
 * Шаблон формы поиска (searchform.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<form role="search" method="get" class="search-form form-inline" action="<?php echo home_url( '/' ); ?>">
	<div class="input-field col s12">
		<input type="search" id="searchform" value="<?php echo get_search_query() ?>" name="s">
		<label for="searchform">Поиск...</label>
	</div>
</form>