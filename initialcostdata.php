<h3 class="text-danger"> Add list of cost</h3>
<div class="form-group">
<label>Select type</label> 
  <form name="savelist-form" method="get" action="#" onsubmit="return false;">
    <select class="form-control" id="selectMet" name="selectMet"> 
        <option value="">Please Select</option>
        <option style="background-color:orange" value="1">Receipt (จ่าย)</option>
        <option style="background-color:royalblue; color: white;" value="2">Expenses (รับ) </option>
        <option style="background-color:greenyellow" value="3">Saving (เก็บ)</option>
    </select>
      <label>List</label>
       <div class="input-group">
           <input type="text" class="form-control" placeholder="list" id="listofcost" name="listofcost" disabled="disabled">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Save!</button>
            </span>
        </div> 
      <div class="showMsg" align="center"></div>
  </form>
</div>
<script>
    $(document).ready(function(){
        $('[name="selectMet"]').change(function(){
            var val = $(this).val();
            val != "" ? $('#listofcost').removeAttr('disabled') :$('#listofcost').attr('disabled', 'disabled');      
       });
       
      $('[name="savelist-form"]').submit(function(){
            if ( $( "#listofcost" ).val() != ""){
                $.ajax({
                   data: $(this).serialize(),
                   url: 'savelistcost.php',
                   type :'POST',
                   success: function (data) {
                        console.log(data);
                        $( ".showMsg" ).text( "Save Done!" ).show().fadeOut( 2000 );
                    },
                    error: function (data) {
                       
                    }
                });
               
            }else{
                $( "#listofcost" ).addClass('loginwrong');
            }
      });
    });
</script>