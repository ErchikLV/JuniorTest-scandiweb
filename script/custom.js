function showDiv(select){
    document.getElementById('book').style.display = "none";
    document.getElementById('furniture').style.display = "none";
    document.getElementById('dvd').style.display = "none";

    if (select.value=="DVD"){
        document.getElementById('dvd').style.display = "block";
    } 
    else if (select.value=="Furniture"){
        document.getElementById('furniture').style.display = "block";
    }
    else if (select.value=="Book"){
        document.getElementById('book').style.display = "block";
    }
    clearfield(); 
    requiredValue(select);
} 

function clearfield(){
    $('#size').val('');
    $('#height').val('');
    $('#width').val('');
    $('#length').val('');
    $('#weigth').val('');
}

function requiredValue(select){
    document.getElementById('size').required = false;
    document.getElementById('height').required = false;
    document.getElementById('width').required = false;
    document.getElementById('length').required = false;
    document.getElementById('weight').required = false;

    if (select.value=="DVD"){
        document.getElementById('size').required = true;
    } 
    else if (select.value=="Furniture"){
        document.getElementById('height').required = true;
        document.getElementById('width').required = true;
        document.getElementById('length').required = true;
    }
    else if (select.value=="Book"){
        document.getElementById('weight').required = true;
    }
} 

function checkSKU() {
    $('#sku').keyup(function(){
        var sku = $(this).val();
            $.ajax ({
                url : "php/checkSku.php",
                method : "POST",
                data :  {sku :sku },
                dataType: "text",
                    success:function(html)
                    {
                        $('#availability').html(html);
                    }
            });
    });
};

