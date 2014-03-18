<?php

// First field is user editable and won't be saved
// Second field will be the generated hash, is hidden and will be saved

?>

<input class="input" id="plain-field" type="password" placeholder="<?php echo l::get('panel.field.bcrypt', "Change current password") ?>">
<input class="input" id="crypt-field"  type="hidden" name="<?php echo $name ?>" value="<?php echo $value ?>">