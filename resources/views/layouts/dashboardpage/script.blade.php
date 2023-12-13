<script src="{{ asset('dashboardpage/assets/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('dashboardpage/assets/js/app.min.js') }}"></script>
<script src="{{ asset('dashboardpage/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('dashboardpage/assets/libs/simplebar/dist/simplebar.js') }}"></script>
<script src="{{ asset('dashboardpage/assets/js/dashboard.js') }}"></script>
<script src="{{ asset('dashboardpage/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $.extend($.fn.dataTable.defaults, {
            searching: true,
            ordering: true
        });
        $('#table').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'colvis',
                    className: 'btn-primary'
                },
                {
                    extend: 'csv',
                    className: 'btn-primary'
                },
                {
                    extend: 'excel',
                    className: 'btn-primary'
                },
                {
                    extend: 'pdf',
                    className: 'btn-primary'
                },
                {
                    extend: 'print',
                    className: 'btn-primary'
                }
            ],
            initComplete: function() {
                var btns = $('.btn-secondary');
                btns.removeClass('btn-secondary');
            },
        });
    });
</script>
