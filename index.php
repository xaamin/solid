<?php
include_once 'vendor/autoload.php';

// S
/*
use NullData\Reporter;
use NullData\Formatters\HtmlOutput;
use NullData\Formatters\JsonOutput;
use NullData\Repositories\SaleRepository;

$repository = new SaleRepository;

$reporte = new Reporter($repository);

$startDate = '2017-06-01';
$endDate = '2017-06-06';

$result = $reporte->between($startDate, $endDate, new JsonOutput());

echo "\n\n" . $result . "\n\n";
*/

// O
/*
use NullData\Shapes\Square;
use NullData\Shapes\Circle;
use NullData\AreaCalculator;

$shapes = [
    new Square(2, 2),
    new Square(3, 3),
    new Circle(3)
];

$calculator = new AreaCalculator();

$area = $calculator->area($shapes);

echo "\n\n" . $area . "\n\n";
*/

// L
/*
use NullData\MediaPlayer\VideoManager;
use NullData\MediaPlayer\VideoPlayer;
use NullData\MediaPlayer\AviVideoPlayer;

$video = new VideoPlayer;
$avi = new AviVideoPlayer;
$manager = new VideoManager;

$manager->playWith($video, '/media/ice-age-1.mp4');

$manager->playWith($avi, '/media/ice-age-1.mp4');

$manager->playWith($avi, '/media/ice-age-1.avi');
*/

// L
/*
use NullData\LiskovReporter;
use NullData\Repositories\SalesFilesystemRepository;

$reporter = new LiskovReporter(new SalesFilesystemRepository);

$startDate = '2017-05-01';
$endDate = '2017-05-30';

$data = $reporter->between($startDate, $endDate);

foreach ($data as $sale) {
    print_r($sale);
}

print_r($data);
*/

// O
use NullData\Workers\WorkersManager;
use NullData\Workers\HumanWorker;
use NullData\Workers\AndroidWorker;

$manager = new WorkersManager;
$human = new HumanWorker;
$android = new AndroidWorker;

$manager->manage($human);

$manager->manage($android);