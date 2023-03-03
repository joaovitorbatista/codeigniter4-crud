<footer class="page-footer fixed-bottom">
    <div class="container">
        <div class="d-flex mb-3 text-muted">
            <div class="p-2">
                <span class="hidden-md-down fw-700">2023 © Crud for Technical Test </span>
            </div>
            <div class="ml-auto p-2">
                <ul class="list-table m-0">
                    <li><a href="<?= site_url('/') ?>" class="text-secondary fw-700">Home</a></li>
                    <li><a href="<?= site_url('/add-user') ?>" class="pl-3 text-secondary fw-700">Add User</a></li>
                    <li><a href="<?= site_url('/users-list') ?>" class="pl-3 text-secondary fw-700">Users List</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>  

<script>
    let table = new DataTable('#users-list');
    
    $(document).ready(function(){  
        $('.mobile').inputmask('99 99 9999 9999');  
    });  
</script>

</body>

</html>