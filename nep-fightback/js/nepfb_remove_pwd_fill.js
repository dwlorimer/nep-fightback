$jq = jQuery.noConflict();

$jq().ready(function() {
  $jq('#pass1').val('');
  $jq('#pass2').val('');
  $jq('#send_password').parent().parent().parent().show();
})
