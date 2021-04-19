<div class="modal fade" id="edit<?php echo $urow['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <?php
    $n=mysqli_query($conn,"select * from `items` where id='".$urow['id']."'");
    $nrow=mysqli_fetch_array($n);
    ?>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class = "modal-header">
                <h3 class = "text-success modal-title">Update for item</h3>
                <button type="button" class="close"
                         data-dismiss="modal" 
                         aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-group">
                <div class="modal-body">
                    <label>Title:</label> <input type="text" value="<?php echo $nrow['title']; ?>" id="utitle<?php echo $urow['id']; ?>" 
                    class="form-control">
                    <label>Text:</label> <input type="text" value="<?php echo $nrow['text']; ?>" id="utext<?php echo $urow['id']; ?>" 
                    class="form-control">
                    <label>Category:</label> <input type="text" value="<?php echo $nrow['category']; ?>" id="ucategory<?php echo $urow['id']; ?>"
                     class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="updateitem btn btn-success" value="<?php echo $urow['id']; ?>"><span ></span>Save changes</button> 
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>