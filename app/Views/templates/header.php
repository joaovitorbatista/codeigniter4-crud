<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="/../cf-partners/assets/css/style.css"> -->

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="<?= base_url(); ?>style.css">

    <title>Crud in Codeigniter</title>
</head>

<body>

    <header role="navigation" class="navbar navbar-expand-md navbar-light">
        <div class="container">
            <a class="me-2 me-xl-4 navbar-brand" href="<?= site_url('/') ?>">
                <img src="https://icons-for-free.com/iconfiles/png/512/codeigniter+plain-1324760526216009085.png" alt="" style="width: 40px;"> Crud CI4
            </a>
            <button aria-controls="navbarNav" type="button" aria-label="Toggle navigation" class="ms-auto navbar-toggler collapsed">
                <span class="navbar-toggler-icon">

                </span>
            </button>
            <div class="order-md-2 navbar-collapse collapse ml-5" id="navbarNav">
                <div class="navbar-nav navbar-nav-scroll">
                    <div class="nav-item">
                        <a class="nav-link" href="<?= site_url('/') ?>">Home</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" href="<?= site_url('/users-list') ?>">Users List</a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" href="<?= site_url('/add-user') ?>">Add User</a>
                    </div>
                </div>
            </div>
        </div>
    </header>