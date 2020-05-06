# Laravel package to scrape info from url

> Use this package if you want to extract some HTML or JSON info from websites

---

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [License](#license)

---

## Installation

Install package to your root Laravel project directory

```shell
composer require paumel/scrapper
```

## Usage

Import scraper class:
```php
use Paumel\Scrapper\Scrapper;
```
If you want to scrape HTML data:

```php
$scrapper = new Scrapper('http://test.com', 'html');
$data = $scrapper->find('a.test-class');
```
[More about selecting HTML elements](https://simplehtmldom.sourceforge.io/manual.htm)

If you want to scrape JSON data:

```php
$scrapper = new Scrapper('http://test.com', 'json');
$data = $scrapper->find('json_parameter');
```
---

## License

[![License](http://img.shields.io/:license-mit-blue.svg?style=flat-square)](http://badges.mit-license.org)

- **[MIT license](http://opensource.org/licenses/mit-license.php)**
