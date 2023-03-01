
<?php
include 'connection.php';

?>

<?php include 'header1.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 ">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
                                <div class="text-end">
                                    <a href="agent_form.php" class="btn btn-sm btn-info float-right">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $a=1;
                                        $sql1="SELECT * FROM agent_data";
                                        $result=mysqli_query($conn,$sql1);
                                        while ($row=mysqli_fetch_assoc($result)){ ?>

                                    <tr>
                                        <td><?php echo $a++?></td>
                                        <td><?php echo $row['name']?></td>
                                        <td>
                                        <img width="20%" src="agent_image/<?php echo $row['image']?>" alt="<?php echo $row['image']?>">
                                        </td>
                                        <td><?php echo $row['category']?></td>
                                        <td><?php echo $row['status']?></td>

                                        <td>
                                            <a href="agent_update_form.php?id=<?php echo $row['id']?>" class=" btn btn-sm ">
                                            <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <button data-id="<?php echo $row['id']?>"
                                                class="  deletedata btn btn-sm btn-danger ">
                                                <i class="fa fa-trash" aria-hidden="true"></i>

                                            </button>
                                        </td>

                                    </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
</div>
<?php include 'footer1.php'; ?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<script>
$(document).ready(function() {
    $('.deletedata').click(function() {
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
                        window.location.href="agent_delete.php?id="+id;
                    }, 1000);
                } else {
                    swal("Your imaginary file is safe!");
                }

            });
    })
})
</script>