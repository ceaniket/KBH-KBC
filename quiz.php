



<?php
require_once 'includes/db.php';
list($n_id, $no) = DB::queryFirstList("SELECT nextid, queno FROM nextque");
list($id,$question,$opt1,$opt2,$opt3,$opt4,$ans) = DB::queryFirstList("SELECT * FROM question WHERE id=%s",$n_id);
?>

<script type="text/javascript">
  var id="<?php echo $id; ?>";
  var question="<?php echo $question;?>";
  var opt1="<?php echo $opt1;?>";
  var opt2="<?php echo $opt2;?>";
  var opt3="<?php echo $opt3;?>";
  var opt4="<?php echo $opt4;?>";
  var ans="<?php echo $ans;?>";
  var no="<?php echo "#".$no;?>";
  var anstag="#"+ans;

  $(document).ready(function() {
    $(no).addClass("pricetag");
  });
</script>


<div class="container">
  <div class="col-md-4">
    <button id="result" class='btn'>result</button>
    <button id="effect" class='btn'>show option</button>
  </div>
  <div class="col-md-4">
    <h1>Countdown</h1>
    <span id="cd_h">00</span>:
    <span id="cd_m">00</span>:
    <span id="cd_s">00</span>:
    <span id="cd_ms">00</span>
    <br/>
    <br/>
    <input type="button" value="Start" id="cd_start" />
    <input type="button" value="Pause" id="cd_pause" />
    <input type="button" value="Stop"  id="cd_stop" />
    <input type="button" value="Reset" id="cd_reset" />
    <br/>
    <br/>
    <input type="text" value="15" id="cd_seconds" />
    secs
    <br/>
    <br/>
    <span id="cd_status">Idle</span>
</div>

  <div>
  <div class="col-md-4 col-md-offset-4" >
    <table class="tg" style="margin-left:15em;margin-top:3em;">
    <col width="150px">
    <tr>
      <td id="13" class="tg-bzci">300</th>
    </tr>
    <tr>
      <td id="12" class="tg-bzci">200</td>
    </tr>
    <tr>
      <td id="11" class="tg-bzci">100</td>
    </tr>
    <tr>
      <td id="10"  class="tg-bzci">90</td>
    </tr>
    <tr>
      <td id="9" class="tg-bzci">80</td>
    </tr>
    <tr>
      <td id="8" class="tg-bzci">70</td>
    </tr>
    <tr>
      <td id="7" class="tg-bzci">60</td>
    </tr>
    <tr>
      <td id="6" class="tg-bzci">50</td>
    </tr>
    <tr>
      <td id="5" class="tg-bzci">40</td>
    </tr>
    <tr>
      <td id="4" class="tg-bzci">30</td>
    </tr>
    <tr>
      <td id="3" class="tg-bzci">20</td>
    </tr>
    <tr>
      <td id="2" class="tg-bzci">10</td>
    </tr>
    <tr>
      <td id="1" class="tg-bzci">5</td>
    </tr>
  </table>
</div>
</div>

<div class="footer" style="clear: both;float:none;background: inherit;">
  <div>
    <div class="qback text-center"><p class="pque"><?php echo $question;?></p</div>
  </div>
  <div class="option" style="margin-left:5em;">
    <div class="row">
      <div id="A" class="col-md-4 optw text-center "><p class="pans">A. <?php echo $opt1;?></p></div>
      <div id="B" class="col-md-4 col-md-offset-4 optw text-center"><p class="pans">B. <?php echo $opt2;?></P></div>
    </div>
    <div class="row">
      <div id="C" class="col-md-4 optw text-center"><p class="pans">C. <?php echo $opt3;?></P></div>
      <div id="D"class="col-md-4 col-md-offset-4 optw text-center"><p class="pans">D. <?php echo $opt4;?></p></div>
    </div>
  </div>
</div>
</div>
</body>
</html>
