
<?php
define('WP_USE_THEMES', false);
require('wp-blog-header.php');

echo 'hello<br/>';
echo  get_template_directory_uri();
echo '<br/>';
echo includes_url();
echo '<br/>';
echo 'world';
?>

