# Site Closure Template

## Demo Page
- https://shoppie70.github.io/Site-closure-template/

## Usage
Put these files on your server.

- `.htaccess`
- `index.php`

### `.htaccess`

Copy and paste this code in `.htaccess` to redirect from `Lower page` to `Index page`.

```
RewriteEngine on
RewriteRule ^.+$ / [QSA,R=301,L]
```

### `index.php`

Don't forget to write this code in `index.php` to notice search clorler for site closure.

```php
<?php
header("HTTP/1.0 410 Gone");
```
