<?php  
include 'connection.php';

include 'header1.php';

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="rwo">
                        <div class="col-md-12">
                            <div class="text-end">
                                <a href="web_add_contact_form.php" class="btn btn-info btn-sm float-right mb-3"><i class="fa fa-plus"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <th>Id</th>
                                <th>name</th>
                                <th>email</th>
                                <th>Phone No.</th>
                                <th>Meassages</th>
                                <th>Meassages</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                $a=1;
                                $data="SELECT * FROM website_contact_data";
                                $sql=mysqli_query($conn,$data);
                                while ($row=mysqli_fetch_assoc($sql)) { ?>

                                <tr>
                                    <td><?php echo $a++?></td>
                                    <td><?php echo $row['name']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td><?php echo $row['phone']?></td>
                                    <td><?php echo $row['message']?></td>
                                    <td>
                                        <a href="web_update_contact_form.php ?id=<?php echo $row['id']?>" class="btn btn-info btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                                        </a>
                                    </td>
                                    <td>
                                        <button data-id="<?php echo $row['id']?>"
                                            class="btn btn-danger btn-sm delete"><i class="fa fa-trash"
                                                aria-hidden="true"></i></button>
                                    </td>
                                </tr>

                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include 'footer1.php';
?>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(document).ready(function() {
    $('.delete').click(function() {
        let id = $(this).attr('data-id');
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });
                    setTimeout(() => {
                        window.location.href = "web_contect_delete.php?id=" + id;
                    }, 1000);
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    })
})
</script>