<div class="container mt-4 page-content">

    <div class="d-flex">
        <h2 class="title"><i class="fa-solid fa-house fa-xs subheader-icon"></i> Home page</h2>
    </div>
    <h3 class="subtitle">Welcome to CRUD</h3>

    <div class="row">
        <div class="col-6">
            <div class="p-3 bg-primary-300 rounded overflow-hidden position-relative text-white mb-g">
                <div class="">
                    <h3 class="card-info d-block l-h-n m-0 fw-500">
                        <?= $count ?>
                    </h3>
                    <small class="info m-0 l-h-n">Registered users</small>
                </div>
                <i class="fa-solid fa-users position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>
            </div>
        </div>
        <div class="col-6">
            <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                <div class="">
                    <h3 class="card-info d-block l-h-n m-0 fw-500">
                    <?= $live ?>
                    </h3>
                    <small class="info m-0 l-h-n">Users live in England</small>
                </div>
                <i class="fa-solid fa-house position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>
            </div>
        </div>
        <div class="col-6">
            <div class="p-3 bg-female rounded overflow-hidden position-relative text-white mb-g">
                <div class="">
                    <h3 class="card-info d-block l-h-n m-0 fw-500">
                    <?= $male ?>
                    </h3>
                    <small class="info m-0 l-h-n">Male gender users</small>
                </div>
                <i class="fa-solid fa-mars position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>
            </div>
        </div>
        <div class="col-6">
            <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">
                <div class="">
                    <h3 class="card-info d-block l-h-n m-0 fw-500">
                    <?= $female ?>
                    </h3>
                    <small class="info m-0 l-h-n">Female gender users</small>
                </div>
                <i class="fa-solid fa-venus position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>
            </div>
        </div>
    </div>
</div>