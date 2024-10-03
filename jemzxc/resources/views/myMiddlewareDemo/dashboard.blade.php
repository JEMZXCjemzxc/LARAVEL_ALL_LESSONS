<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome</h1>

    @if (session('confirm'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: "Successfully Login!", 
                text:  "Welcome Admin",
                icon: "success"
            });
        });
    </script>
    @endif
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
<!-- tttg -->