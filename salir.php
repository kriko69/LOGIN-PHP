<?php

    session_start();

    session_destroy();
    header('location:login.php');

//     include('login.php');
//     echo '<div class="container" style="margin-top:30px;">
//     <div class="row">
//         <div class="col-md-4"></div>
//         <div class="col-md-4">
//             <div class="alert alert-success" role="alert">
//                 <p class="mb-0">Saliste correctamente!</p>
//             </div>
//         </div>
//         <div class="col-md-4"></div>
//     </div>
// </div>';

?>