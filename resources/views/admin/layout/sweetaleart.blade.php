@if (Session::has('ok'))
    <script>
        Swal.fire({
            title: "Thành Công",
            text: "{{ session('ok') }}",
            icon: "success"
        });
    </script>
@elseif (Session::has('no'))
    <script>
        Swal.fire({
            title: "Thất Bại",
            text: "{{ session('no') }}",
            icon: "error",
        });
    </script>
@endif
