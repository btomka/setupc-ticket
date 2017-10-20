<!-- Modal Login -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="login">Login</h3>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="emailLogin">Email address</label>
                        <input type="email" class="form-control" id="emailLogin" name="emailLogin" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="passwordLogin">Password</label>
                        <input type="password" class="form-control" id="passwordLogin" name="passwordLogin" placeholder="Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
            
<!-- Modal Register -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="register">Create Profile</h3>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="fullName">Full Name / Company</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="emailRegister">Email address</label>
                        <input type="email" class="form-control" id="emailRegister" name="emailRegister" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="passwordRegister">Password</label>
                        <input type="password" class="form-control" id="passwordRegister" name="passwordRegister" placeholder="Password">
                    </div>
                    <i><small>After creating profile, you will receive activation mail which you need confirm.</small></i>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="CreateUser">Create profile</button>
                </div>
            </form>
        </div>
    </div>
</div>