<?php ob_start() ?>



<div class="container-fluid row justify-content-center gap-3 mt-5 mb-5 m-0 p-3">
                <div class="pd-5 pd-5 col-md-4 text-left shadow rounded bg-black p-5">
                    
                    <p class="fw-bold fs-3 text-white">Conversion</p>
                    <p class=" text-white ">Conversion en chiffre romain</p>
                    <button type="button" class="btn btn-black text-white fs-5 border-white mb-2"><a href="conversion.php">Look at the moves !</a></button>
                </div>
                <div class="pd-5 pd-5 col-md-4 text-left shadow rounded bg-warning p-5">
                    
                    <p class="fw-bold fs-3 text-white">Fastest servers</p>
                    <p class=" text-white">Lorem ipsum dolor sit, amet consectetur adispisicing elit. Natus edispisci consectetur unde debitis ab facilis.</p>
                    <button type="button" class="btn btn-black text-white fs-5 border-white mb-2">Look at the ranking</button>
                </div>
                
            </div>
            <div class="container-fluid row justify-content-center gap-3 me-0 ms-0 mt-5 mb-5">
                <div class="pd-5 pd-5 col-md-4 text-left shadow rounded bg-primary p-5">
                    
                    <p class="fw-bold fs-3 text-white">Best support 2019/2020</p>
                    <p class=" text-white ">Lorem ipsum dolor sit, amet consectetur adispisicing elit. Natus edispisci consectetur unde debitis ab facilis.</p>
                    <button type="button" class="btn btn-black text-white fs-5 border-white mb-2">Look at the ranking</button>
                </div>
                <div class="pd-5 col-md-4 text-left text-black shadow rounded bg-white p-5">
                    
                    <p class="fw-bold fs-3 ">Groundbreaking low prices</p>
                    <p class=" ">Lorem ipsum dolor sit, amet consectetur adispisicing elit. Natus edispisci consectetur unde debitis ab facilis.</p>
                    <button type="button" class="btn btn-black  fs-5 border-dark mb-2">Look at the ranking</button>
                </div>

    

<?php
$content =ob_get_clean();
require "template.php";
?>