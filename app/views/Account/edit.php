<?php $this->view('header', 'Foodie'); ?>

<section class="vh-100" style="background-color: #f4f5f7;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-6 mb-4 mb-lg-0">
                <div class="card mb-3" style="border-radius: .5rem;">
                    <div class="row g-0">
                        <div class="col-md-4 gradient-custom text-center text-dark" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                            <img src="https://img.freepik.com/free-vector/cheese-burger-cartoon-icon-illustration_138676-2450.jpg?w=2000" alt="Avatar" class="img-fluid my-5" style="width: 180px;" />

                            <form action='' method='post' enctype='multipart/form-data'>

                                <input class='form-control' type="text" name="username" value="<?= $_SESSION['username'] ?>" />

                                <!-- edit button -->
                                <a href="/Account/edit"><i class="far fa-edit mb-5"></i></a>
                        </div>

                        <div class="col-md-8">
                            <div class="card-body p-4">

                                <h6><?= _("Account Information") ?></h6>
                                <hr class="mt-0 mb-4">
                                <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                        <h6><?= _("First Name") ?></h6>
                                        <input class='form-control' type="text" name="first_name" value="<?= $data->first_name ?>" />
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6><?= _("Last Name") ?></h6>
                                        <input class='form-control' type="text" name="last_name" value="<?= $data->last_name ?>" />
                                    </div>
                                </div>
                                <hr class="mt-0 mb-4">
                                <!-- <div class="row pt-1">
                                    <div class="col-6 mb-3">
                                        <h6>Check purchase history</h6>
                                        <a href="/History/index"><i class="fas fa-history"></i></a>
                                        <br>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <h6>Check favorite foods</h6>
                                        <a href="/Favorite/index"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start">
                                    <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                    <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                    <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                                </div> -->
                                <input type="submit" name="action" value="Save changes" class='btn themeButton' />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->view('footer', 'Foodie'); ?>