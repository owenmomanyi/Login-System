$('#srch').keyup(()=>{
  var srch = $('#srch').val();
  srch = jQuery.trim(srch);
  if (srch !== '') {
    $('#infoSearch').html('<h2 id="stat">Searching...</h2>');
      $.post("srchEngine.php",
      {
          srch: srch
      },
    function(data){
      $('#infoSearch').html(data);
    });
  }else{
    $('#infoSearch').html('<h2 id="stat">Your Search Results</h2>');
  }
})