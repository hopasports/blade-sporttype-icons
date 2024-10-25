# Blade SportType Icons

<!-- <a href="https://github.com/hopasports/blade-sporttype-icons/actions?query=workflow%3ATests">
    <img src="https://github.com/blade-ui-kit/blade-sporttype-icons/workflows/Tests/badge.svg" alt="Tests">
</a> -->
<a href="https://packagist.org/packages/hopasports/blade-sporttype-icons">
    <img src="https://img.shields.io/packagist/v/hopasports/blade-sporttype-icons" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/hopasports/blade-sporttype-icons">
    <img src="https://img.shields.io/packagist/dt/hopasports/blade-sporttype-icons" alt="Total Downloads">
</a>

## Requirements

- PHP 8.1 or higher
- Laravel 10.0 or higher

## Installation

```bash
composer require hopasports/blade-sporttype-icons
```

## Blade Icons

Blade SportType Icons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-sporttype-athletics/>
```

You can also pass classes to your icon components:

```blade
<x-sporttype-athletics class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-sporttype-athletics style="color: #555"/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-sporttype-icons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-sporttype-icons/athletics.svg') }}" width="10" height="10"/>
```

## Maintainers

Blade SportType Icons is developed and maintained by Eddie Palmans.

## License

Blade SportType Icons is open-sourced software licensed under [the CC0-1.0 license](LICENSE).
