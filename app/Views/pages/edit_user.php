<div class="container mt-4 page-content">
    
    <div class="d-flex">
        <h2 class="title"><i class="fa-solid fa-user-plus fa-xs subheader-icon"></i> Edit User</h2>
        <a href="<?= site_url('/users-list') ?>" class="btn btn-ci4 mb-2">
        <i class="fa-solid fa-circle-left fa-xs"></i> Return
        </a>
    </div>
    <h3 class="subtitle"><?= $user_obj['firstname'] . " " . $user_obj['lastname'];?></h3>

    <div class="card">
        <div class="row">
            <div class="col">
                <form method="post" id="update_user" name="update_user" action="<?= site_url('/update') ?>">
                    <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">
                    <div class="row">
                        
                        <div class="col-6 form-group">
                            <label for="Firstname">
                                Firstname
                            </label>
                            <input type="text" name="firstname" class="form-control" value="<?= $user_obj['firstname'];?>">
                        </div>
                        <div class="col-6 form-group">
                            <label for="lastname">
                                Lastname
                            </label>
                            <input type="text" name="lastname" class="form-control" value="<?= $user_obj['lastname'];?>">
                        </div>
                        <div class="col-6 form-group">
                            <label for="email">
                                Email
                            </label>
                            <input type="text" name="email" class="form-control" value="<?= $user_obj['email'];?>">
                        </div>
                        <div class="col-6 form-group">
                            <label for="mobile">
                                Mobile
                            </label>
                            <input type="text" name="mobile" class="form-control" value="<?= $user_obj['mobile'];?>">
                        </div>
                        <div class="col-6 form-group">
                            <label for="live">
                                Do you live in England?
                            </label>
                            <select class="form-control" name="live" id="live">
                                <option value="<?= $user_obj['live'];?>"><?= $user_obj['live'];?></option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="col-6 form-group">
                            <label for="gender_preference">
                                Gender Preference
                            </label>
                            <input type="hidden" name="gender_preference" class="form-control" value="<?= $user_obj['gender_preference'];?>">
                            <div class="form-control disabled"><?= $user_obj['gender_preference'];?></div>
                        </div>
                        <div class="col form-group">
                            <button class="btn btn-ci4 btn-block mt-3">Save data</button>
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