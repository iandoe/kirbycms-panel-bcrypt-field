bCrypt Field - Kirby CMS Panel
===========================

Simple bcrypt Kirby CMS Panel Field for encrypting passwords on the fly.

This uses [dcodeIO's javascript bcrypt implementation](https://github.com/dcodeIO/bcrypt.js) and jQuery already present in your KirbyCMS Panel


## Install

After installing the [kirbycms panel](https://github.com/bastianallgeier/kirbycms-panel/), create a directory `site/panel/fields`, cd into this directory and clone this repository in the bcrypt directory.

```
git clone git@github.com:iandoe/kirbycms-panel-bcrypt-field.git bcrypt
```

You should end up with the new directory `site/panel/fields/bcrypt`

## Usage

Once installed, when creating a panel blueprint, you can add the field using `type: bcrypt`, eg:

```
# default blueprint

title: Page
pages: true
files: true
fields:
  title: 
    label: Title
    type:  text
  password: 
    label: Password
    type:  bcrypt
```

## Behaviour

The password is hashed before the form is submitted in the Kirby Panel, the form is submitted once the password has been successfully hashed (this can take a few seconds max depending on the client computer) and is stored in its encrypted form in the content file. This of course requires javascript to be enabled.

## Translating

By default, the field has a placeholder reading "Change Password" to inform the user that there may already be a password stored even if the field is empty.

To translate this placeholder, add an entry in your panel language file `panel/languages/fr.php` (for French) and add the following entry

```
'panel.field.bcrypt' => 'Changer le mot de passe',
```

## License

This is released under the MIT License

Guillaume 'Wilhearts' PICARD, 2014