<?php
/* SVN FILE: $Id: missing_helper_file.ctp 8283 2009-08-03 20:49:17Z gwoo $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision: 8283 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2009-08-03 13:49:17 -0700 (Mon, 03 Aug 2009) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<h2><?php __('Missing Helper File'); ?></h2>
<p class="error">
	<strong><?php __('Error'); ?>: </strong>
	<?php echo sprintf(__("The helper file %s can not be found or does not exist.", true), APP_DIR . DS . "views" . DS . "helpers" . DS . $file);?>
</p>
<p  class="error">
	<strong><?php __('Error'); ?>: </strong>
	<?php echo sprintf(__('Create the class below in file: %s', true), APP_DIR . DS . "views" . DS . "helpers" . DS . $file);?>
</p>
<pre>
&lt;?php
class <?php echo $helperClass;?> extends AppHelper {

}
?&gt;
</pre>
<p class="notice">
	<strong><?php __('Notice'); ?>: </strong>
	<?php echo sprintf(__('If you want to customize this error message, create %s', true), APP_DIR . DS . "views" . DS . "errors" . DS . "missing_helper_file.ctp");?>
</p>
