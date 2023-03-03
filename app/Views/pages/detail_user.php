<div class="container mt-4 page-content">

    <div class="d-flex">
        <h2 class="title"><i class="fa-solid fa-user fa-xs subheader-icon"></i> More detail of</h2>
        <a href="<?= site_url('/users-list') ?>" class="btn btn-ci4 mb-2">
            <i class="fa-solid fa-circle-left fa-xs"></i> Return
        </a>
    </div>
    <h3 class="subtitle"><?= $user_obj['firstname'] . " " . $user_obj['lastname']; ?></h3>

    <div class="card">
        <div class="row">
            <div class="col">
                <div class="row">

                    <div class="col-6 form-group">
                        <label for="username">
                            Username
                        </label>
                        <div class="form-control disabled"><?= $user_obj['username']; ?></div>
                    </div>
                    <div class="col-6 form-group">
                        <label for="password">
                            Password
                        </label>
                        <div class="form-control disabled">*******</div>
                    </div>
                    <div class="col-6 form-group">
                        <label for="firstname">
                            Firstname
                        </label>
                        <div class="form-control disabled"><?= $user_obj['firstname']; ?></div>
                    </div>
                    <div class="col-6 form-group">
                        <label for="lastname">
                            Lastname
                        </label>
                        <div class="form-control disabled"><?= $user_obj['lastname']; ?></div>
                    </div>
                    <div class="col-6 form-group">
                        <label for="email">
                            Email
                        </label>
                        <div class="form-control disabled"><?= $user_obj['email']; ?></div>
                    </div>
                    <div class="col-6 form-group">
                        <label for="mobile">
                            Mobile
                        </label>
                        <div class="form-control disabled"><?= $user_obj['mobile']; ?></div>
                    </div>
                    <div class="col-6 form-group">
                        <label for="live">
                            Do you live in England?
                        </label>
                        <div class="form-control disabled"><?= $user_obj['live']; ?></div>
                    </div>
                    <div class="col-6 form-group">
                        <label for="gender_preference">
                            Gender Preference
                        </label>
                        <div class="form-control disabled"><?= $user_obj['gender_preference']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
<script>
    if ($("#update_user").length > 0) {
        $("#update_user").validate({
            rules: {
                username: {
                    required: true,
                },
                email: {
                    required: true,
                    maxlength: 60,
                    email: true,
                },
            },
            messages: {
                username: {
                    required: "Name is required.",
                },
                email: {
                    required: "Email is required.",
                    email: "It does not seem to be a valid email.",
                    maxlength: "The email should be or equal to 60 chars.",
                },
            },
        })
    }
</script>