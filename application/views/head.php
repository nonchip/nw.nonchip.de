<!DOCTYPE html>
<html>
  <head>
    <title><?=$site['title']?></title>
    <style>
      body{
        background: <?=$site['style']['bgcolor']?>;
        font-family: Arial;
      }
      div#heading{
        color: <?=$site['style']['content_bgcolor']?>;
        position: fixed;
        height: <?=$site['style']['header_height']?>;
        left: 0px;
        top: 0px;
        right: 0px;
        /* http://www.colorzilla.com/gradient-editor/#000000+0,000000+100;Black+3D+%231 */
        background: <?=$site['style']['bgcolor']?>; /* Old browsers */
        background: -moz-linear-gradient(top, #000000 0%, <?=$site['style']['bgcolor']?> 70%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#000000), color-stop(70%,<?=$site['style']['bgcolor']?>)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top, #000000 0%,<?=$site['style']['bgcolor']?> 70%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top, #000000 0%,<?=$site['style']['bgcolor']?> 70%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top, #000000 0%,<?=$site['style']['bgcolor']?> 70%); /* IE10+ */
        background: linear-gradient(to bottom, #000000 0%,<?=$site['style']['bgcolor']?> 70%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='<?=$site['style']['bgcolor']?>',GradientType=0 ); /* IE6-9 */
      }
      div#heading h1{
        margin: 1em 2em;
        font-variant:small-caps;
        display: inline-block;
      }

      div#heading ul li a{
        font-variant:small-caps;
        text-decoration: none;
        color: <?=$site['style']['content_bgcolor']?>;
      }
      div#heading ul li a:hover{
        font-weight: bold;
      }
      div#heading ul{
        display: inline-block;
      }
      div#heading ul li{
        border-right: 1px solid <?=$site['style']['content_bgcolor']?>;
        display: inline;
        list-style: none;
        padding: 0 1em;
      }
      div#heading ul li:first-child{
        border-left: 1px solid <?=$site['style']['content_bgcolor']?>;
      }

      div#nav{
        position: fixed;
        width: <?=$site['style']['nav_width']?>;
        left: 0px;
        top: <?=$site['style']['header_height']?>;
        bottom: 0px;
        background: <?=$site['style']['bgcolor']?> url(<?=base_url('static/sidebar-bg-horde.png')?>);
        background-size: 100%;
        background-repeat: no-repeat;
      }

      div#content{
        padding: 1em;
        position: fixed;
        left: <?=$site['style']['nav_width']?>;
        top: <?=$site['style']['header_height']?>;
        bottom: 0px;
        min-width: 75%;
        background: <?=$site['style']['content_bgcolor']?>;
        -webkit-box-shadow: 0.1em 0.1em 1em <?=$site['style']['content_bgcolor']?>;
           -moz-box-shadow: 0.1em 0.1em 1em <?=$site['style']['content_bgcolor']?>;
                box-shadow: 0.1em 0.1em 1em <?=$site['style']['content_bgcolor']?>;
      }

      img#tabard{
        float: right;
        top: -120px;
        right: -120px;
        position: relative;
      }
    </style>
  </head>

  <body>
    <div id='rightborder'></div>
    <div id='heading'>
      <h1>
        <?=$site['heading']?>
      </h1>
      <ul>
        <li><a href='<?=site_url('/')?>'>Home</a></li>
        <li><a href='http://bb.nw.nonchip.de/' target='_blank'>Forum</a></li>
        <li><a href='http://eu.battle.net/wow/en/guild/malygos/die_Nachtw%C3%B6lfe/' target='_blank'>@MalygosEU</a></li>
      </ul>
    </div>
    <div id='nav'>
    </div>
    <div id='content'>
      <img id='tabard' src='<?=base_url('static/tabard.png')?>'>
