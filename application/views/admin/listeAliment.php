<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body" style="text-align: center;">
                                <form class="form-sample" action="<?php echo site_url('adminController/InsererAliment') ?>" method="get">
                                <h2>Listes des alements :</h2>
                                <p><h4>Ajouter nouveau aliment</h4></p>
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nom du Aliment</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="Nom" class="form-control" />
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Montant</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="Montant" class="form-control"/>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Poids</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="Poids" class="form-control"/>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="example" class="display expandable-table" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Nom de l' aliments</th>
                                    <th>Poids gagner ou perdu</th>
                                    <th>Montant</th>
                                    <th>Duree(en jour)</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($Aliment as $index => $aliment) { ?>
                                    <tr>
                                        <td><?php echo $aliment['Nom'] ?></td>
                                        <td><?php echo $aliment['Poids'] ?></td>
                                        <td><?php echo number_format($aliment['Montant']) ?></td>
                                        <td><?php echo $aliment['duree'] ?></td>
                                        <td>
                                            <a style="margin-left: -30px;" onclick="openModif(<?php echo $index; ?>)"><i class="icon-file  menu-icon "></i></a>
                                            <a href="<?php echo site_url("AdminController/SupprimerAliment") ?>?IdAliment=<?php echo $aliment['Id'] ?>"><i class="icon-trash  menu-icon "></i></a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
        .modal {
            display: none; 
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4); 
        }
        
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%; 
        }
    
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
<div id="modif" class="modal">
    <div class="col-md-9 grid-margin stretch-card" style="margin-left: 22%; margin-top: 5%;">
        <div class="card">
            <div class="card-body">
                <div class="card-body">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <form class="form-sample" action="<?php echo site_url("AdminController/Modifier"); ?>" method="get">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nom du sport</label>
                                <div class="col-sm-9">
                                    <input type="text" name="Nom" class="form-control" id="nom"/>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Montant</label>
                                <div class="col-sm-9">
                                    <input type="text" name="Montant" class="form-control" id="montant" value="42000" />
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Poids</label>
                                <div class="col-sm-9">
                                    <input type="text" name="Poids" class="form-control" id="poids" value="485" />
                                </div>
                                </div>
                            </div>
                            <input type="hidden" name="IdAliment" id="idAliment">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </from>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
    var selectedRowData; 
    function openModif(index) {
        selectedRowData = <?php echo json_encode($Aliment); ?>[index]; 
        document.getElementById("modif").style.display = "block";
        var modalInput = document.getElementById("nom");
        modalInput.value = selectedRowData.Nom;
        var modalInput1 = document.getElementById("montant");
        modalInput1.value = selectedRowData.Montant;
        var modalInput2 = document.getElementById("poids");
        modalInput2.value = selectedRowData.Poids; 
        var modalInput3 = document.getElementById("idAliment");
        modalInput3.value = selectedRowData.Id; 
    }

    function closeModif() {
        document.getElementById("modif").style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target === document.getElementById("modif")) {
            closeModif();
        }
    }
</script>