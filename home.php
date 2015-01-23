<div class="form-group">
<label>Select type</label> 
  <form id="save" method="get" action="#" >
    <select class="form-control" id="selectMet" name="selectMet"> 
       <option value="">Please Select</option>
        <option style="background-color:orange" value="1">Receipt (จ่าย)</option>
          <option style="background-color:royalblue; color: white;" value="2">Expenses (รับ) </option>
            <option style="background-color:greenyellow" value="3">Saving (เก็บ)</option>
    </select>
  </form>
</div>
<script>
    $(document).ready(function(){
        $('[name="selectMet"]').change(function(){
            var val = $(this).val();
            $('.jumbotron3').load("saveAmonth.php?val="+val+"");   
       });
    });
    </script>

 <div class="jumbotron3">
       
 </div>

