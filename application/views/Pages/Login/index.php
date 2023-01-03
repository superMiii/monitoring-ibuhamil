<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center align-items-center vh-100">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 font-weight-bold text-gray-900 mb-4">Praktik Mandiri <br> Bidan Rena Puspa</h1>
                                    <h1 class="h5 text-gray-900 mb-4">Login</h1>
                                    <?= $this->session->flashdata('message'); ?>
                                </div>
                                <form action="<?= base_url('auth/login'); ?>" method="post" class="user">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Enter Username">
                                        <?= form_error('username', '<small class="text-danger ml-2">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger ml-2">', '</small>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <!-- Button trigger modal -->
                                    <a class="small" data-toggle="modal" data-target="#exampleModal">
                                        Forgot Password?
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Hubungi Administrator untuk mengubah password anda
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
