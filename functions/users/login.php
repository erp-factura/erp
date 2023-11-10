<?php 
    session_start();

    include __DIR__ . "/../../config/db.php";

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        function login($db, $username, $password) {
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $result_query = mysqli_query($db, $query);
    
            if(mysqli_num_rows($result_query) > 0) {
                $rowUser = mysqli_fetch_array($result_query);
                $profile = $rowUser['type'];
    
                $_SESSION['name'] = $rowUser['name'];
                $_SESSION['UID'] = $rowUser['id'];
                $_SESSION['type'] = $profile;
    
                redirectUrl($profile);
            } else {
                redirectError();
            }
        }
    
        function redirectUrl($profile) {
            if ($profile === "Administrador") {
                header('Location: ../../dashboardAdmin.php');
            } else {
                echo "<script>
                    Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Credenciales incorrectas'
                    }).then(function() {
                    window.location.href = '../../index.php';
                    });
                </script>";
                die();
            }
        }
    
        function redirectError() {
            echo "<script>
                Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Error al tratar de autenticarte...'
                }).then(function() {
                window.location.href = '../../index.php';
                });
            </script>";
            die();
        }

        login($db, $username, $password);
    } else {
        echo "<script>
                Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Error al tratar de autenticarte...'
                }).then(function() {
                window.location.href = '../../index.php';
                });
            </script>";
            die();
    }
?>