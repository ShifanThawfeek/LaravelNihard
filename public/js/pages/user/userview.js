jQuery(document).ready(function(){
 
 
$("#btnSave").click(function(){
    
    var firstname=$("#txtFName").val();
    var lastname=$("#txtLName").val();
    var mobile=$("#txtMobile").val();
    

    $.ajax({
            url: "/insertuser",
            type: 'POST',
            dataType: 'json',
            cache: false,
            async: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {firstname:firstname,lastname:lastname,mobile:mobile},
            success: function(jsonData) {
                if (jsonData.Success == true)
                {
                    alert("Successfully Saved");
                }
                else
                {
                   alert("Unable To save");
                }
            }

        });
        
});
 
 
 
 
});