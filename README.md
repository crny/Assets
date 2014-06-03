Assets
=====
#### Asset Compiler for Laravel 4
[Composer package](https://packagist.org/packages/serafim/assets)


### Installation
1) Insert package name inside your `composer.json` file and update composer vendors.
```json
{
    "require": {
        "serafim/assets": "dev-master"
    }
}
```

2) Add provider line inside `config/app.php`
```
'Assets\Provider\AssetsServiceProvider'
```


### Usage
1) Make assets directories:
```
app/
    assets/
        javascripts/
        stylesheets/
    
```
\*directory names may be different, but it is recommended naming

2) Include inside your blade template
```html
<!doctype html>
<html>
<head>
    <title>Example</title>
    {{app('assets')->make('javascripts/file.js')}}
    {{app('assets')->make('stylesheets/some.scss')}}
</head>
<body>
</body>
</html>
```

3) Refresh page and see result


### Manifest syntax
You can collect several files into one, using a special syntax inclusions within files.
```js
// = require filename.js
// = require path/to/file.coffee 
// = require all/path/*
// = require all/path/recursive/**
// = require all/files/with/extension/*.js
```


### Serialization interface

Read manifest recursively (inside included files)
```php
->make('path/to/file' [, bool $includeRecursive = false]);
```

Return inline tag (example: `<style>body{}</style>`)
```php
->make('path/to/file')->getInline([array $htmlAttributes = array()]);
```

Return full asset path (example: `/var/www/public/assets/hash.js`)
```php
->make('path/to/file')->getSourcesPath();
```

Return sources
```php
->make('path/to/file')->getSources();
```

Return link tag (example: `<script src="path/to/compiled.file.js"></script>`)
```php
->make('path/to/file')->getLink([array $htmlAttributes = array()]);

// alias: ->__toString();
```









