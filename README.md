# EloquentRound
[![Build Status](https://travis-ci.org/NiclasHedam/eloquent-round.svg?branch=master)](https://travis-ci.org/NiclasHedam/eloquent-round)
[![Coverage Status](https://coveralls.io/repos/github/NiclasHedam/eloquent-round/badge.svg?branch=master)](https://coveralls.io/github/NiclasHedam/eloquent-round?branch=master)

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

    public $rounds = [
        'decimal' => 2,
        'preciseDecimal' => 4,
    ];
}
```

```
$model->decimal = 1.675;
echo $model->decimal; //1.68
```

## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D

## Credits

This package is made possible by [Pairy ApS](http://pairy.dk) and [Pandi Web ApS](http://pandiweb.dk).

## License

Released under the Apache License 2.0
