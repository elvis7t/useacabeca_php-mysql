<?php
require_once '../model/conf.php';
require_once('../config/menu.php');
require_once '../model/conf.php';
?>

<body>
    <div class="d-flex justify-content-center">
        <h1><strong>Risky</strong> Jobs</h1>
    </div>
    <div class="d-flex justify-content-center">
        <p class="h4">Dangeri Your dream job is out there.<br>
            Do you have the guts to go find it?
        </p>
    </div>

    <div class="container">
        <div class="col-md-6 offset-md-3">
            <p class="h3"><strong>RiskY Jobs - Search</strong></p>
            <form id="form-remove" method="post" action="<?= $_SERVER['PHP_SELF']; ?>" class="row g-3">
                <div class="col-auto">
                    <label for="search" class="visually-hidden">Find your risky job:</label>
                    <!-- //pattern="[a-zA-Z\s]+$" -->
                    <input type="text" required value="" class="form-control"  id="search"
                        name="search" maxlength="30" placeholder="Find jobs">
                </div>
                <div class="col-auto">
                    <button type="submit" name="submit" id="enviar" class="btn btn-primary">
                        <ion-icon name="send"></ion-icon> Submit
                    </button>
                </div>
                <div class="row mb-3">
                    
                    <?php
                    if (isset($_POST['submit'])) {
                        $sql = "SELECT * FROM mismatch_riskyjobs";
                        // Extrai as palavras-chaves de busca e as coloca em um array
                        $search = $_POST['search'];
                        $clean = str_replace(',', '', $search);
                        $words = explode(' ', $clean);
                        $final_search_words = array();
                        
                        if (count($words) > 0) {
                            foreach ($words as $word) {
                                if (!empty($word)) {
                                    $final_search_words[] = $word;
                                }
                            }
                        }

                        // //Gera uma cláusula WHERE usando todas as palavras-chaves de busca
                        $where = array();

                        if(count($final_search_words) > 0) {
                            foreach ($final_search_words as $word){
                                $where[] = "description LIKE'%" . $word . "%'";
                            }
                        }
                        $clause = implode(' OR ', $where);

                        // Adiciona a cláusula WHERE á consulta de busca.                        
                        if (!empty($clause)) {
                            $sql .= " WHERE $clause";
                        }
                        // echo $sql;exit;
                        $result = mysqli_query($con, $sql);
                        $row = array();
                        if (mysqli_num_rows($result) == 0) {
                            $men = "No Results";
                        };
                        echo '<p class="h3 d-flex d-flex justify-content-center" ><strong>Results</strong></p>';
                        echo '<p class="h3 d-flex d-flex justify-content-center bg-warning" >' . $men . '</p>';

                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <table class="table table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Job</th>
                            <th>Description</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $row['job_id']; ?></td>
                                <td><?= $row['title']; ?></td>
                                <td><?= $row['description']; ?></td>
                            </tr>
                        </tbody>


                        <?php
                        }
                    }
                        ?>
                    </table>
                </div>



            </form>

        </div>
    </div>
</body>

</html>