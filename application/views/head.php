<!DOCTYPE html>
<html>
  <head>
    <title><?=$site['title']?></title>
    <style>
      body{
        background: #000;
        font-family: Arial;
      }
      div#heading{
        color: #FFF3E8;
        position: fixed;
        height: <?=$site['style']['header_height']?>;
        left: 0px;
        top: 0px;
        right: 0px;
        /* http://www.colorzilla.com/gradient-editor/#45484d+0,000000+100;Black+3D+%231 */
        background: #45484d; /* Old browsers */
        background: -moz-linear-gradient(top, #45484d 0%, #000000 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#45484d), color-stop(100%,#000000)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top, #45484d 0%,#000000 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top, #45484d 0%,#000000 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top, #45484d 0%,#000000 100%); /* IE10+ */
        background: linear-gradient(to bottom, #45484d 0%,#000000 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#45484d', endColorstr='#000000',GradientType=0 ); /* IE6-9 */
      }
      div#heading h1{
        margin: 0.5em;
        margin-left: 2em;
        font-variant:small-caps;
      }

      div#nav{
        position: fixed;
        width: <?=$site['style']['nav_width']?>;
        left: 0px;
        top: <?=$site['style']['header_height']?>;
        bottom: 0px;
        background: #000 url(<?=base_url('static/sidebar-bg-horde.png')?>);
        background-size: 100%;
        background-repeat: no-repeat;
      }

      div#content{
        padding: 1em;
        position: fixed;
        left: <?=$site['style']['nav_width']?>;
        top: <?=$site['style']['header_height']?>;
        bottom: 0px;
        min-width: 60%;
        background: #FFF3E8;
        -webkit-box-shadow: 0.1em 0.1em 1em #FFF3E8;
           -moz-box-shadow: 0.1em 0.1em 1em #FFF3E8;
                box-shadow: 0.1em 0.1em 1em #FFF3E8;
      }
    </style>
  </head>

  <body>
    <div id='rightborder'></div>
    <div id='heading'>
      <h1>
        <?=$site['heading']?>
      </h1>
    </div>
    <div id='nav'>
    </div>
    <div id='content'>
