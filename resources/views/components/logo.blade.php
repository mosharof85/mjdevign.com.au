<div class=" ">
    <p class="busniess">Do You Have A Logo?</p>
    <div class="table_on">

        <div class="form-check">
            <input type="radio" name="havelogo" value="0" id="logono" checked>
            <label for="logono">No - Create one for me (Free)</label>
        </div>
        <div class="form-check ">
            <input type="radio" name="havelogo" value="1" id="logoyes">
            <label for="logoyes">Yes</label>
            <input style="display:none;"  class="browse image" name="logoimage[]" id="logoimage" type="file" files=true  multiple>                                 
            
        </div>
        
    </div>

<script type="text/javascript">
    var yes = document.querySelector('.table_on #logoyes');
    var no = document.querySelector('.table_on #logono');
    var inputimage = document.querySelector('.table_on .image');
    yes.addEventListener('change', (event) => {
        if(event.target.checked){
            inputimage.style.display = "block";
        }

    });
    no.addEventListener('change',(event)=>{
        if(event.target.checked){
            inputimage.style.display = "none";
            inputimage.value = "";
        }
    });
    
</script>