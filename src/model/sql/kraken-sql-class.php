<?php

/**
 *
 */
class KrakenSql {

  function __construct()
  {

  }

  public function postTicker($baseVolume, $lowestAsk, $highestBid,$last, $key)
  {
    $postTicker = "INSERT INTO ticker_kraken (
              id ,
              vol ,
              low ,
              high ,
              last ,
              pair ,
              created_at
            )
            VALUES (
              NULL,
              " . $baseVolume .",
              " . $lowestAsk . ",
              " . $highestBid . ",
              " . $last . ",
              '" . $key .  "'," .
              "'" . date("Y-m-d H:i:s") . "' );";

      return $postTicker;
  }

  public function lastTicker()
  {
      $lastId = "SELECT max(id) FROM ticker_kraken";
      $max['max(id)'] = $lastId;

      $lastTicker = "SELECT id,
                        vol,
                        low,
                        high,
                        last,
                        pair,
                        created_at
                FROM
                ticker_kraken
                WHERE
                id = " . $max['max(id)'];

      return $lastTicker;
  }

  public function all()
  {
    $all = "SELECT * FROM ticker_kraken
              WHERE created_at IN (SELECT max(created_at) FROM ticker_kraken)";
              return $all;
  }

  public function allByVolume()
  {
    $allByVolume = "SELECT * FROM ticker_kraken
              WHERE created_at IN (SELECT max(created_at) FROM ticker_kraken)
              AND pair LIKE 'BTC_%'
              ORDER BY vol DESC;";

    return $allByVolume;
  }
}

//$bootstrap['sql']['allByVolume'] = $allByVolume;
//$bootstrap['sql']['postTicker'] = $postTicker;


?>
