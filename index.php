<?php
require_once 'vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::create(dirname(__FILE__));
$dotenv->load();

$kraken = new Kraken(getenv('API_KEY'), getenv('API_SECRET_KEY'));

$files = array_diff(scandir('image_input'), ['.', '..', '.gitkeep']);

foreach ($files as $file) {
    $params = [
        'file' => 'image_input/' . $file,
        'wait' => true,
    ];
    $data = $kraken->upload($params);

    if ($data['success']) {
        file_put_contents('image_output/' . $file, file_get_contents($data['kraked_url']));
        echo "Success. image_output/{$file}.\r\n";
    } else {
        echo "{$file}. Error message: {$data['message']}.\r\n";
    }
}
