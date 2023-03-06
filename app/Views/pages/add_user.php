<div class="container mt-4 page-content">
    
    <div class="d-flex">
        <h2 class="title"><i class="fa-solid fa-user-plus fa-xs subheader-icon"></i> Add User</h2>
        <a href="<?= site_url('/users-list') ?>" class="btn btn-ci4 mb-2">
        <i class="fa-solid fa-circle-left fa-xs"></i> Return
        </a>
    </div>
    <h3 class="subtitle">Add new profile</h3>

    <div class="card">
        <div class="row">
            <div class="col">
                <form method="post" id="add_create" name="add_create" action="<?= site_url('/submit-form') ?>">
                    <div class="row">
                        <div class="col-6 form-group">
                            <label for="username">
                                Username
                            </label>
                            <input type="text" name="username" placeholder="Your Username" class="form-control">
                        </div>
                        <div class="col-6 form-group">
                            <label for="password">
                                password
                            </label>
                            <input type="password" name="password" placeholder="⋅⋅⋅⋅⋅⋅⋅⋅⋅⋅" class="form-control">
                        </div>
                        <div class="col-6 form-group">
                            <label for="Firstname">
                                Firstname
                            </label>
                            <input type="text" name="firstname" placeholder="Your Firstname" class="form-control">
                        </div>
                        <div class="col-6 form-group">
                            <label for="lastname">
                                Lastname
                            </label>
                            <input type="text" name="lastname" placeholder="Your Lastname" class="form-control">
                        </div>
                        <div class="col-6 form-group">
                            <label for="email">
                                Email
                            </label>
                            <input type="text" name="email" placeholder="Choose your best email" class="form-control">
                        </div>
                        <div class="col-6 form-group">
                            <label for="mobile">
                                Mobile
                            </label>
                            <input type="text" name="mobile" placeholder="44 77 5500 7800" class="form-control mobile">
                        </div>
                        <div class="col-6 form-group">
                            <label for="live">
                                Do you live in England?
                            </label>
                            <select class="form-control" name="live" id="live">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="col-6 form-group">
                            <label for="gender_preference">
                                Gender Preference
                            </label>
                            <select class="form-control" name="gender_preference" id="gender_preference">
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                        </div>
                        <div class="col form-group">
                            <button class="btn btn-ci4 btn-block mt-3">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>

<script>

    if ($("#add_create").length > 0) {
        $("#add_create").validate({
            rules: {
                username: {
                    required: true,
                },
                password: {
                    required: true,
                },
                firstname: {
                    required: true,
                },
                lastname: {
                    required: true,
                },
                mobile: {
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
                    required: "Username is required.",
                },
                password: {
                    required: "Password is required.",
                },
                firstname: {
                    required: "Firstame is required.",
                },
                lastname: {
                    required: "Lastname is required.",
                },
                mobile: {
                    required: "Your mobile is required.",
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
