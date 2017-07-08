# Yandex Maps Embed

## Installation

Required composer dependency:
```bash
composer require "tarik02/yandex-maps-embed"
```

Register ServiceProvider(add it to config/app.php):
```php
  Tarik02\YandexMapsEmbed\Providers\YandexMapsEmbedServiceProvider::class,
```


## Usage
`$name` is parsed name.
`$options` is options for frame(`['width' => 560, 'height' => 400]`).

Get name:
```php
	$name = yandex_map_parse($string); // Using helper
	$name = YandexMapEmbed::parse($string); // Using facade
```

Show frame:
```blade
	@yandexMap($name, $options)
	{{ yandex_map_make($name, $options) }}
	{{ YandexMapEmbed::make($name, $options) }}
```

