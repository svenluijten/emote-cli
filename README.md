![emote-cli](https://cloud.githubusercontent.com/assets/11269635/26469371/0b6ecd08-419a-11e7-9a63-28e4b1ba59f7.jpg)

# Emote Cli

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Software License][ico-license]](LICENSE.md)
[![Code Climate][ico-codeclimate]][link-codeclimate]
[![StyleCI][ico-styleci]][link-styleci]

Emotes at your fingertips! ᕕ( ᐛ )ᕗ See all the emotes available in this package
[here](data/emotes.json).

The emotes were found [here](https://github.com/dysfunc/ascii-emoji). If you want
to add your favorite emote, just add it to [`emotes.json`](data/emotes.json) and
send a pull request!

## Installation
Via [composer](http://getcomposer.org):

```bash
$ composer global require sven/emote-cli
```

Ensure Composer's global bin directory is included in your path. This directory
is located at `~/.composer/vendor/bin` on macOS / Linux, and at
`%APPDATA%/Composer/vendor/bin` on Windows.

## Usage
Fetch an emote by its name:

```bash
$ emote get cute
(｡◕‿◕｡)
```

Copy it to your clipboard immediately:

```bash
$ emote get cute | clip
```

**Note:** This is an OS-dependent feature, and there are several options available
per OS. It just outputs the emote to `stdout`, which should be enough information
for people familiar with the command line to figure it out.

## Contributing
All contributions (pull requests, issues and feature requests) are
welcome. Make sure to read through the [CONTRIBUTING.md](CONTRIBUTING.md) first,
though. See the [contributors page](../../graphs/contributors) for all contributors.

## License
`sven/emote-cli` is licensed under the MIT License (MIT). Please see the
[license file](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/sven/emote-cli.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-green.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/sven/emote-cli.svg?style=flat-square
[ico-codeclimate]: https://img.shields.io/codeclimate/github/svenluijten/emote-cli.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/92437052/shield

[link-packagist]: https://packagist.org/packages/sven/emote-cli
[link-downloads]: https://packagist.org/packages/sven/emote-cli
[link-codeclimate]: https://codeclimate.com/github/svenluijten/emote-cli
[link-styleci]: https://styleci.io/repos/92437052
