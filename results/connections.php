<?php
session_start();
error_reporting(0);

require 'telemetry_settings.php';
require_once 'telemetry_db.php';

header('Content-Type: text/html; charset=utf-8');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0, s-maxage=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>GRP_26 SPEED TEST</title>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no" />
        <meta charset="UTF-8" />

        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600"/>
            <!-- https://fonts.google.com/specimen/Open+Sans -->
            <link rel="stylesheet" href="../css/all.min.css" />
            <!-- https://fontawesome.com/ -->
            <link rel="stylesheet" href="../css/bootstrap.min.css" />
            <!-- https://getbootstrap.com/ -->
            <link rel="stylesheet" href="../css/tooplate-style.css" />

        <link rel="shortcut icon" href="../favicon.ico">

        <style type="text/css">
            html,body{
                margin:0;
                padding:0;
                border:none;
                width:100%; min-height:100%;
                background:#FFFFFF;
                color:#202020;
            }
            body{
                background-color:#FFFFFF;
                width:100%;
                box-shadow:0 1em 6em #00000080;
                padding:1em 1em 4em 1em;
                border-radius:0.4em;
                text-align:center;
                font-family:"Roboto",sans-serif;
            }
            table{
                margin:2em 0;
                width:100%;
            }
            table, tr, th, td {
                border: 1px solid #AAAAAA;
            }
            th {
                width: 6em;
            }
            td {
                word-break: break-all;
                text-align: left;
            }
        </style>

    </head>
    <body>
        <!-- page header -->
        <div class="container" id="home">
          <div class="col-12 text-center">
            <div class="tm-page-header">
              <i class="fas fa-4x fa-chart-bar mr-4"></i>
              <h1 class="d-inline-block text-uppercase">GRP_26 SPEED TEST</h1>
            </div>
          </div>
        </div>
        <!-- navbar -->
        <div class="tm-nav-section">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <nav class="navbar navbar-expand-md navbar-light">
                  <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#tmMainNav"
                    aria-controls="tmMainNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="tmMainNav">
                    <ul class="navbar-nav mx-auto tm-navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="../index.php">TestSpeed 
                        <span class="sr-only"></span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="connections.php">Connections</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Map</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="stats.php">Activities</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Account</a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>

    <section class="tm-banner-section" id="tmVideoSection">
    </section>
        
                <form action="connections.php" method="GET">
                    <h3>Search test results</h3>
                    <input type="hidden" name="op" value="id" />
                    <input type="text" name="id" id="id" placeholder="Test ID" value=""/>
                    <input type="submit" value="Find" />
                    <input type="submit" onclick="document.getElementById('id').value=''" value="Show last 100 tests" />
                </form>
                <?php
                if ($_GET['op'] === 'id' && !empty($_GET['id'])) {
                    $speedtest = getSpeedtestUserById($_GET['id']);
                    $speedtests = [];
                    if (false === $speedtest) {
                        echo '<div>There was an error trying to fetch the speedtest result for ID "'.$_GET['id'].'".</div>';
                    } elseif (null === $speedtest) {
                        echo '<div>Could not find a speedtest result for ID "'.$_GET['id'].'".</div>';
                    } else {
                        $speedtests = [$speedtest];
                    }
                } else {
                    $speedtests = getLatestSpeedtestUsers();
                    if (false === $speedtests) {
                        echo '<div>There was an error trying to fetch latest speedtest results.</div>';
                    } elseif (empty($speedtests)) {
                        echo '<div>Could not find any speedtest results in database.</div>';
                    }
                }
                foreach ($speedtests as $speedtest) {
                    ?>
                    <table>
                        <tr>
                            <th>Test ID</th>
                            <td> <?= htmlspecialchars($speedtest['id_formatted'], ENT_HTML5, 'UTF-8') ?></td>
                        </tr>
                        <tr>
                            <th>Date and time</th>
                            <td><?= htmlspecialchars($speedtest['timestamp'], ENT_HTML5, 'UTF-8') ?></td>
                        </tr>
                        <tr>
                            <th>IP and ISP Info</th>
                            <td>
                                <?= htmlspecialchars($speedtest['ip'], ENT_HTML5, 'UTF-8') ?><br/>
                                <?= htmlspecialchars($speedtest['ispinfo'], ENT_HTML5, 'UTF-8') ?>
                            </td>
                        </tr>
                        <tr>
                            <th>User agent and locale</th>
                            <td><?= htmlspecialchars($speedtest['ua'], ENT_HTML5, 'UTF-8') ?><br/>
                                <?= htmlspecialchars($speedtest['lang'], ENT_HTML5, 'UTF-8') ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Download speed</th>
                            <td><?= htmlspecialchars($speedtest['dl'], ENT_HTML5, 'UTF-8') ?></td>
                        </tr>
                        <tr>
                            <th>Upload speed</th>
                            <td><?= htmlspecialchars($speedtest['ul'], ENT_HTML5, 'UTF-8') ?></td>
                        </tr>
                        <tr>
                            <th>Ping</th>
                            <td><?= htmlspecialchars($speedtest['ping'], ENT_HTML5, 'UTF-8') ?></td>
                        </tr>
                        <tr>
                            <th>Jitter</th>
                            <td><?= htmlspecialchars($speedtest['jitter'], ENT_HTML5, 'UTF-8') ?></td>
                        </tr>
                        <tr>
                            <th>Log</th>
                            <td><?= htmlspecialchars($speedtest['log'], ENT_HTML5, 'UTF-8') ?></td>
                        </tr>
                        <tr>
                            <th>Extra info</th>
                            <td><?= htmlspecialchars($speedtest['extra'], ENT_HTML5, 'UTF-8') ?></td>
                        </tr>
                    </table>
                    <?php
                }
           
            ?>
    </body>
</html>
