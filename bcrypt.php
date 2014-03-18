<?php

// First field is user editable and won't be saved
// Second field will be the generated hash, is hidden and will be saved

// Multi-Lingual Placeholder, default is none
$ph = (isset($placeholder)) ? form::multilangtext($placeholder) : "";

?>

<input class="input" id="plain-field" type="password" placeholder="<?php echo $ph ?>">
<input class="input" id="crypt-field" type="hidden" name="<?php echo $name ?>" value="<?php echo $value ?>">