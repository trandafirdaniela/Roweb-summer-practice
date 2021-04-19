<?php
include('conn.php');
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8" name = "viewport" content = "width-device=width, initial-scale=1" />
    <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
    <link rel = "stylesheet"  href = "css/stylePHP.css" />
    <title>CRUD</title>
</head>
<body>

<div>

    <form class="form-inline" style="padding-top:5%;padding-left:10%">
                        <div class="form-group mb-2 mr-sm-3">
                            <label class="mb-2 mr-sm-3">Title:</label>
                            <input type  = "text" id = "title" class = "form-control mb-2 mr-sm-3">
                        </div>
                        <div class="form-group mb-2 mr-sm-3">
                            <label class="mb-2 mr-sm-3">Text: </label>
                            <input type  = "text" id = "text" class = "form-control mb-2 mr-sm-2 ">
                        </div>
                        <div class="form-group mb-2 mr-sm-3">
                            <label class="mb-2 mr-sm-3">Category: </label>
                            <input type  = "text" id = "category" class = "form-control mb-2 mr-sm-2">
                        </div>
                        <div class = "form-group mb-2 mr-sm-2">
                            <button type = "button" id="addnew" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> CREATE</button>
                        </div>
    </form>
 </div><br>

 <div class="row" style="padding-left:12%">
             <div id="itemTable"> </div>
 </div>
   
</div>
</body>
<script src = "js/jquery-3.1.1.js"></script>
<script src = "js/bootstrap.js"></script>
<script type = "text/javascript">
    $(document).ready(function(){
        showItem();

        //Add New
        $(document).on('click', '#addnew', function(){
            if ($('#title').val()=="" || $('#text').val()=="" || $('#category').val()==""){
                alert('Please input data first');
            }
            else{
                $title=$('#title').val();
                $text=$('#text').val();
                $category=$('#category').val();
                $.ajax({
                    type: "POST",
                    url: "create_item.php",
                    data: {
                        title: $title,
                        text: $text,
                        category: $category,
                        add: 1,
                    },
                    success: function(){
                        showItem();
                    }
                });
            }
        });

        //Delete
        $(document).on('click', '.delete', function(){
            if(confirm('Are you sure?')){
                $id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "delete_item.php",
                    data: {
                        id: $id,
                        del: 1,
                    },
                    success: function () {
                        showItem();
                    }
                });
            }
        });

        //Update
        $(document).on('click', '.updateitem', function(){
            $uid=$(this).val();
            $('#edit'+$uid).modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
            $utitle=$('#utitle'+$uid).val();
            $utext=$('#utext'+$uid).val();
            $ucategory=$('#ucategory'+$uid).val();
            $.ajax({
                type: "POST",
                url: "update_item.php",
                data: {
                    id: $uid,
                    title: $utitle,
                    text: $utext,
                    category: $ucategory,
                    edit: 1,
                },
                success: function(){
                    showItem();
                }
            });
        });

    });

    //Showing our Table
    function showItem(){
        $.ajax({
            url: 'show_item.php',
            type: 'POST',
            async: false,
            data:{
                show: 1
            },
            success: function(response){
                $('#itemTable').html(response);
            }
        });
    }

</script>
</html>