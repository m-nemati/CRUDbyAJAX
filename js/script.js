$(document).ready(function(){

    $("form").on("click", "button", create);
    
    function create(event){
        event.preventDefault();
        
        var allData = $("form").serialize();  //Recived All Form Data

        //Send data by Ajax
        $.ajax({
            url: "php/create.php",
            method: "post",
            data: allData,
            success: function(response){
                console.log(response)
                if (response == 1){
                    $("input").val("");
                }
                else{
                    alert("تمام فیلدها باید پر شود! ");
                }
            }
        })
    }
});