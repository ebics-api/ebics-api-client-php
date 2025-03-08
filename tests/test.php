<?php
# CC=1 php ./tests/

require_once 'src/EbicsApiClient.php';
$env = parse_ini_file('.env');

$client = new EbicsApi\Client\EbicsApiClient($env['API_KEY'], $env['API_HOST']);

if (!empty($_ENV['CC'])) {
    $connection = $client->connectionCreate([
        'host_url' => $env['HOST_URL'],
        'host_id' => $env['HOST_ID'],
        'partner_id' => $env['PARTNER_ID'],
        'user_id' => $env['USER_ID'],
        'keyring_op' => 'NOT_STORE',
        'name' => 'My Connection',
    ]);

    var_dump($connection);
} elseif (!empty($_ENV['BTD'])) {
    $download = $client->orderTypeBtd([
        'connection_id' => '1',
        'service_name' => 'OTH',
        'scope' => 'BIL',
        'msg_name' => 'msc',
        'service_option' => 'CH002LMF',
        'container' => 'ZIP',
        'start_date' => '2024-01-01',
        'end_date' => '2025-04-01',
    ]);

    var_dump($download);
}