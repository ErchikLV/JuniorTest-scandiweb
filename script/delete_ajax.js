function deleteAjax(){
    $(document).ready(function(){
            var id = [];
            $('input:checkbox:checked').each(function(i){
                id[i] = $(this).val();
                    $.ajax({
                        url:'php/delete.php',
                        method:'POST',
                        data:{'idproduct' : id},
                        success:function(){
                            for(var i=0; i<id.length; i++){
                                $('div#'+id[i]).fadeOut('slow');
                                $('div#'+id[i]).remove();
                            }
                        }
                    });
            });
    });
}


