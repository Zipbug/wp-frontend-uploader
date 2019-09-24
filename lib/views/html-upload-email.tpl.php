<?php global $fu_result; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>User submitted content on <?php bloginfo( 'sitename' ) ?></title>

<style type="text/css">

  /* reset */
  #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
  .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
  .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Forces Hotmail to display normal line spacing.  More on that: http://www.emailonacid.com/forum/viewthread/43/ */
  table td {border-collapse: collapse;} /* Outlook 07, 10 padding issue fix */
  table {border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; } /* remove spacing around Outlook 07, 10 tables */

  /* bring inline */
  img {display: block; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
  a img {border: none;}
  a.phone {text-decoration: none; color: #000001 !important; pointer-events: auto; cursor: default;} /* phone link, use as wrapper on phone numbers */
  span {font-size: 13px; line-height: 17px; font-family: monospace; color: #000001;}
</style>
<!--[if gte mso 9]>
  <style>
  /* Target Outlook 2007 and 2010 */
  </style>
<![endif]-->
</head>
<body style="width:100%; margin:0; padding:0; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;">

<!-- body wrapper -->
<table cellpadding="0" cellspacing="0" border="0" style="margin:0; padding:0; width:100%; line-height: 100% !important;">
  <tr>
    <td valign="top">
      <!-- edge wrapper -->
      <table cellpadding="0" cellspacing="0" border="0" align="center" width="600" style="background: #efefef;">
        <tr>
          <td valign="top">
            <!-- content wrapper -->
            <table cellpadding="15" cellspacing="0" border="0" align="center" width="560" style="background: #efefef;">
              <tr>
                <td valign="top" style="vertical-align: top;">
<!-- ///////////////////////////////////////////////////// -->


<?php if ( isset( $fu_result['post_id'] ) && $fu_result['post_id'] ):
$obj = get_post( $fu_result['post_id'] );
?>

<table cellpadding="0" cellspacing="0" border="0" align="center">
  <tr style="background-color:#ffffff;">
    <td>
      <img src="https://carbonprintanddesign.pxpqa.com/wp-content/uploads/2019/01/logo.png" alt="Carbon Print and Design">
    </td>
  <tr>
  <tr>
    <td valign="top" style="vertical-align: top;text-align:center;" >
      <h2>Thank you!</h2>
      <h4>Your order has been received, we will be contacting you soon. In the mean time here is your order (images not attached).</h4>
    </td>
  </tr>
</table>

<table cellpadding="0" cellspacing="0" border="0" align="center">
  <?php $meta = get_post_meta($fu_result['post_id']); ?>
  <?php if($meta): ?>
  <tr>
    <td><h3>Here is the submitted data</h3></td>

  </tr>
  <tr>
    <td>
      <?php
      $i = 0;
      foreach($meta as $key=>$val)
      {
        if (strpos($key, '_') === 0) {
          echo "";
        }
        else{
          $newKey = str_replace(' ', '_', $key);
          $newVal = str_replace('', '”', $val[0]);
          echo  '<h4><span style="text-transform:uppercase;">'.$newKey. '</span> : ' . $newVal . '</h4>';
        }
        if($i === 6){
          echo "</td><td>"
        }
        $i++;

      }
      ?>
    </td>
  </tr>
 <?php endif; ?>
</table>


<?php endif ?>

<?php if ( isset( $fu_result['media_ids'] ) && $fu_result['media_ids'] ): ?>

<table cellpadding="0" cellspacing="0" border="0" align="center">
  <tr>
    <td valign="top" style="vertical-align: top;">
      <h2>Submitted Images</h2>
    </td>
  </tr>
</table>

<table cellpadding="0" cellspacing="0" border="0" align="center">
  <tr>
<?php
    $media = get_attached_media( '',  $fu_result['post_id'])
?>

    <td valign="top" style="vertical-align: top;">
    <?php print_r($media) ?>
    </td>

  </tr>
</table>
<?php endif ?>


<table cellpadding="0" cellspacing="0" border="0" align="center">
  <tr height="30">
    <td valign="top" style="vertical-align: top; background: #efefef;" width="600" >
    </td>
  </tr>
</table>

<!-- //////////// -->
                </td>
              </tr>
            </table>
            <!-- / content wrapper -->
          </td>
        </tr>
      </table>
      <!-- / edge wrapper -->
    </td>
  </tr>
</table>
<!-- / page wrapper -->
</body>
</html>
