<?php
// PHPCoinAddress test
print "<pre>";
$version = '0.2.0.pre';
print "\nTEST: PHPCoinAddress $version\n";
require_once('PHPCoinAddress.php');
CoinAddress::set_debug(false);
CoinAddress::set_reuse_keys(true);
print "Math library: " . USE_EXT . "\n";
print "Reuse keys: " . ( CoinAddress::$reuse_keys ? 'true' : 'false' ) . "\n";
print "Debug: " . ( CoinAddress::$debug? 'true' : 'false' ) . "\n";
$start = microtime(1);
// START TEST
$coin = CoinAddress::bitcoin();          coin_info('Bitcoin', $coin);
$end = microtime(1);
$duration = $end - $start;
$duration = round($duration,8);
print "\nTest Time: $duration seconds\n";
print "</pre>";
exit;
//////////////////////////////////////////////
function coin_info($name,$coin) {
    print "<pre>";
    print "\n$name";
    print " [ prefix_public: " . CoinAddress::$prefix_public;
    print "  prefix_private: " . CoinAddress::$prefix_private . " ]\n";
    print "uncompressed:\n";
    print 'public (base58): ' . $coin['public'] . "\n";
    //print 'public (Hex)   : ' . $coin['public_hex'] . "\n";
    print 'private (WIF)  : ' . $coin['private'] . "\n";
    //print 'private (Hex)  : ' . $coin['private_hex'] . "\n";
    // print "compressed:\n";
    // print 'public (base58): ' . $coin['public_compressed'] . "\n";
    // print 'public (Hex)   : ' . $coin['public_compressed_hex'] . "\n";
    // print 'private (WIF)  : ' . $coin['private_compressed'] . "\n";
    // print 'private (Hex)  : ' . $coin['private_compressed_hex'] . "\n";
    print "</pre>";
}
