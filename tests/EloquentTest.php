<?php
use PHPUnit\Framework\TestCase;
use NiclasHedam\EloquentRound\RoundsDecimals;

class EloquentTest extends TestCase
{
    public function testSimpleRounding()
    {
        $model = new Model();
        $model->rounds = [
            'decimal' => 2,
            'preciseDecimal' => 4,
        ];

        $model->decimal = 17.261772;
        $model->preciseDecimal = 17.261722;

        $this->assertEquals(17.26, $model->decimal);
        $this->assertEquals(17.2617, $model->preciseDecimal);
    }

    public function testNotRounding()
    {
        $model = new Model();

        $model->decimal = 17.261772;

        $this->assertEquals(17.261772, $model->decimal);
    }

    public function testBrokenRoundsAttribute()
    {
        $model = new Model();
        $model->rounds = [
            'decimal' => 'hello world',
        ];

        $model->decimal = 17.261772;

        $this->assertEquals(17.261772, $model->decimal);
    }

    public function testBrokenRoundsAttribute2()
    {
        $model = new Model();
        $model->rounds = 42;

        $model->decimal = 17.261772;

        $this->assertEquals(17.261772, $model->decimal);
    }

    public function testNoRoundsAttribute()
    {
        $model = new ModelNotRounding();

        $model->decimal = 17.261772;

        $this->assertEquals(17.261772, $model->decimal);
    }
}

class Model extends \Illuminate\Database\Eloquent\Model
{
    use RoundsDecimals;
    public $rounds = [];
    protected $attributes = [
        'decimal', 'preciseDecimal'
    ];
    protected $fillable = [
        'decimal', 'preciseDecimal'
    ];
}

class ModelNotRounding extends \Illuminate\Database\Eloquent\Model
{
    use RoundsDecimals;
    protected $attributes = [
        'decimal', 'preciseDecimal'
    ];
    protected $fillable = [
        'decimal', 'preciseDecimal'
    ];
}
