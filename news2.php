<?php
include 'header.php';
?>


    <!-- this os a heading about agent section -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-11 col-lg-11 col-sm-11 col-xl-11">
                    <h3 class="heading mt-5 mb-5">NEWS</h3>

                </div>
                <div class="col-md-1 col-lg-1 col-sm-1 col-xl-1">
                    <p class="agent mt-5"><a href="index1.php" style="color:#5ac763;"><i class="fa fa-home"
                                aria-hidden="true"></i></a> <span> /</span> News</p>
                </div>
            </div>
        </div>
    </section>

    <!-- news content  -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-lg-9 col-xl-9">
                    <div class="card-main mt-4">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2">
                                <a href="#" class="btn mt-1"
                                    style="width:100%; background-color:#f7f7f8; color:#1e1e1e;c"><i
                                        class="fa fa-calendar" aria-hidden="true"></i> Dec.1,2016</a>
                            </div>
                            <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2">
                                <a href="#" class="btn mt-1 "
                                    style="width:100%; background-color:#f7f7f8; color:#1e1e1e;"><i class="fa fa-user"
                                        aria-hidden="true"></i> John Doe</a>
                            </div>
                            <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2">
                                <a href="#" class="btn mt-1 "
                                    style="width:100%; background-color:#f7f7f8; color:#1e1e1e;"><i
                                        class="fa fa-comments" aria-hidden="true"></i> 1 Comment</a>
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3">
                                <a href="#" class="btn mt-1 "
                                    style="width:100%; background-color:#f7f7f8; color:#1e1e1e;"><i
                                        class="fa fa-folder-open" aria-hidden="true"></i> Uncategorized</a>
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3"></div>
                        </div>
                    </div>

                    <!-- about information  -->

                    <section>
                        <div class="information mt-3 ">
                            <h2>Hello world!</h2>
                            <p class="text mt-3" style="color:#8b8b8b;">Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>
                        </div>
                    </section>

                    <hr class="line mt-5">

                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="news.php">1</a></li>
                            <li class="page-item"><a class="page-link" href="news2.php">2</a></li>
                            <li class="page-item">
                                <a class="page-link" href="news.php">Next</a>
                            </li>
                        </ul>
                    </nav>




                </div>
                <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3">
                    <div class="card" style="background-color:#f7f7f8;">
                        <div class="card-body  mt-3">
                            <h6>SEARCH</h6>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                                    <input type="text" name="search" class="form-control" id=""
                                        placeholder="please search">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-1" style="background-color:#f7f7f8;">
                        <div class="card-body  mt-3 ">
                            <h6>RECENT POSTS</h6>
                            <ul>
                                <li><a href="">Cross Browser Compatible</a></li>
                                <li><a href="">Gallery Post Example</a></li>
                                <li><a href="">Video Post Example</a></li>
                                <li><a href=""> Building Websites for All Devices</a></li>
                                <li><a href="">Hello world!</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mt-1" style="background-color:#f7f7f8;">
                        <div class="card-body  mt-3">
                            <h6>ARCHIVES</h6>
                            <ul>
                                <li><a href="">February 2016</a></li>
                                <li><a href="">January 2016</a></li>
                                <li><a href="">December 2015</a></li>
                                <li><a href="">October 2015</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mt-1" style="background-color:#f7f7f8;">
                        <div class="card-body  mt-3">
                            <h6>CATEGORIES</h6>
                            <ul>
                                <li><a href="">Uncategorized</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


 <?php
 include 'footer.php';
 ?>