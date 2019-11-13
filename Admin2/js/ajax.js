$(document).ready(function(){





    
    //function to edit category
    function categoryEdit(id, name, description){
        $.ajax({
            url: './process/category/edit.php',
            method: 'post',
            data: {id: id, name:name, description:description},
            success: function(data){
                console.log (JSON.parse(data)); 
            }
          });
    }
    //categoryEdit(5, 'leek', 'just another crook editing going o');
    
   
    function updateCategoryStatus(currentstatus, id){
        $.ajax({
            url: './process/category/categorystatus.php',
            method: 'post',
            data: {id: id, currentstatus:currentstatus},
            success: function(data){
                console.log(JSON.parse(data));
            }
          });
    }
   // updateCategoryStatus(0, 3);
























})