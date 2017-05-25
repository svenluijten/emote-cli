![emoji-cli](:hero)

# Emoji Cli

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Software License][ico-license]](LICENSE.md)
[![Code Climate][ico-codeclimate]][link-codeclimate]
[![StyleCI][ico-styleci]][link-styleci]

Emoji at your fingertips! ᕕ( ᐛ )ᕗ See all the emoji available in this package
[here](data/emoji.json).

## Installation
Via [composer](http://getcomposer.org):

```bash
$ composer global require sven/emoji-cli
```

Ensure Composer's global bin directory is included in your path. This directory
is located at `~/.composer/vendor/bin` on macOS / Linux, and at
`%APPDATA%/Composer/vendor/bin` on Windows.

## Usage
Fetch an emoji by its name:

```bash
$ emoji get cute
(｡◕‿◕｡)
```

Copy it to your clipboard immediately:

```bash
$ emoji get cute | clip
```

**Note:** This is an OS-dependent feature, and there are several options available
per OS. It just outputs the emoji to `stdout`, which should be enough explanation
for people familiar with the command line to figure it out.

## Contributing
All contributions (pull requests, issues and feature requests) are
welcome. Make sure to read through the [CONTRIBUTING.md](CONTRIBUTING.md) first,
though. See the [contributors page](../../graphs/contributors) for all contributors.

## License
`sven/emoji-cli` is licensed under the MIT License (MIT). Please see the
[license file](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/sven/emoji-cli.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-green.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/sven/emoji-cli.svg?style=flat-square
[ico-codeclimate]: https://img.shields.io/codeclimate/github/svenluijten/emoji-cli.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/:styleci/shield

[link-packagist]: https://packagist.org/packages/sven/emoji-cli
[link-downloads]: https://packagist.org/packages/sven/emoji-cli
[link-codeclimate]: https://codeclimate.com/github/svenluijten/emoji-cli
[link-styleci]: https://styleci.io/repos/:styleci
