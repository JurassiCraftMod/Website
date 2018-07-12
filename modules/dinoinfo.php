<div style="margin-left: 480px;">
  <?php
  $page = explode(",",$_GET['page']);
  $ini = parse_ini_file("wiki/dinodexpages/" . $page[1] . ".ini");
  ?>
  <?php echo("<img src='images/dinoShowcase/" . $page[1] . ".png' alt='' style='width: 65%;z-index=-1;'></img>")?>
  <div class="description">
    <h1>Dino Description</h1>
    <p><?php echo $ini['desc']; ?></p>
  </div>
  <div class="stats">
    <div class="cardgroup" style="width: 50%;margin-left: 0px;">
      <div class="cardlist">
        <div class="cardnohover">
          <h1>Dimensions</h1>
          <p>Height = <?php echo $ini['height']; ?><br>Length = <?php echo $ini['length']; ?></p>
        </div>
        <div class="cardnohover">
          <h1>General</h1>
          <p>Name = <?php echo $ini['name']; ?><br>Classification = <?php echo $ini['type']; ?><br>Diet = <?php echo $ini['diet']; ?></p>
        </div>
        <div class="cardnohover">
          <h1>Needs</h1>
          <p>Health = <?php echo $ini['health']; ?><br>Population = <?php echo $ini['population']; ?><br>Agression = <?php echo $ini['agression']; ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
