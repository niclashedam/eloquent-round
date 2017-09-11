# EloquentRound
[![Build Status](https://scrutinizer-ci.com/g/NiclasHedam/EloquentRound/badges/build.png?b=master)](https://scrutinizer-ci.com/g/NiclasHedam/EloquentRound/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/NiclasHedam/EloquentRound/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/NiclasHedam/EloquentRound/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/NiclasHedam/EloquentRound/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/NiclasHedam/EloquentRound/?branch=master)

This package automatically rounds all given decimal values when setting the attribute in a eloquent model. This is especially great, when you use a MySQL database, so that you know the right value is written to the database.

## Installation

Install it using composer

`composer require niclashedam/eloquent-round`

## Usage

Use the RoundsDecimals trait.


```
use NiclasHedam\EloquentRound\RoundsDecimals;

class Model extends \Illuminate\Database\Eloquent\Model
{
    use RoundsDecimals;
}
```

## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D

## Credits

This package is made possible with help from [Frax.dk Development](http://frax.dk) and [Hedam Technologies IvS](http://hedam.org).

## License

Released under the Apache License 2.0
