<?php
include __DIR__ . '/partials/templates/header.php';



?>




<main>
    <div class="container">
        <div class="row justify-content-center ">
            <form action="" method="POST" class=" col-sm-12 col-6 p-3 text-center bg-warning rounded-3 ">
                <input type="number" min="6" max="20" name="passlen" class="p-2 rounded-3 border-0 "
                    style="outline:none;">
                <button type="sumbit" class=" btn btn-outline-dark">Genera</button>
                <button type="reset" class=" btn btn-outline-dark">Annulla</button>
            </form>
        </div>

    </div>

</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>