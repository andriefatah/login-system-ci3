    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" name="email" type="text" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="password" name="password" type="password" placeholder="*******" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Login</a></div>
                                            </div>
                                        </form>
                                    </div>
                                        <div class="card-footer text-center py-3">
                                          <div class="small"><a href="<?= base_url('auth/registration') ?>">Create an Account!</a></div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
