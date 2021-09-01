<script type="text/javascript">
$(document).ready(function(){
$('#okk').click(function(e){
  e.preventDefault();
  $.ajax(
    {
      method: "post",
      url: "insertdata.php",
      data: $('#formid').serialize(),
      dataType: "text",
      succes: function(response){
        $('#messagedisplay').text(response);
      }
    }
  )
})

});




$(document).ready(function(){
  $('#okk').click(function(e){
    e.presentDefault();
    $.ajax({
      type: "method",
      url: "fetchdata.php",
      data: $('#displaydata').serialize(),
      dataType: "html",
      succes: function(response){
$('#messagedisplay').html(response);
      }
    });
  })
});
</script>
