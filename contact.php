<?php
$PageTitle = "Contact - ACS"; 
$nav_focus = "contact";
include_once('header.php');
?>
<script src="js/functions.js"></script>

<div id="calloutlong">
  <div class='centered'>
    <div id="calloutblock_column">
      <table style="width:600px">
        <tr>
          <th><h2>Contact Us</h2></th>
        </tr> 
        <tr>
          <td>
            <h2>
            <dl>
              <dt>Email: <script>gen_mail_to_link('aacsomusic','gmail.com')</script></dt>
              <!-- <dt>Mailing Address:</dt>
              <dd>Arundel Community Strings</dd>
              <dd>c/o Jennifer Danko</dd>
              <dd>303 Nicole Lane</dd>
              <dd>Glen Burnie, MD 21061</dd> -->
            </dl>
            </h2>
          </td>
          <td>
            <a target="_blank" href="https://www.facebook.com/ArundelCommunityStrings">
            <img alt="follow me on facebook" src="img/facebook-1.jpg" border=0 style="float:right"></a>
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>


<?php
include_once('footer.php');
?>
