<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body" style="text-align: center;">
                                <form class="form-sample" action="<?php echo site_url('adminController/InsererSport') ?>" method="get">
                                    <h2>Listes des Sports actuelle :</h2>
                                    <p><h4>Ajouter nouveau actuelle</h4></p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nom du sport</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="Nom" class="form-control" />
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Duree</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="Duree" class="form-control" />
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Poids</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="Poids" class="form-control" />
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
                                    <th>Nom de l' excercice</th>
                                    <th>Poids gagner ou perdu</th>
                                    <th>Duree</th>
                                    <th>Duree(en jour)</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                 <?php foreach ($Sport as $index => $sport) { ?>
                                    <tr>
                                        <td><?php echo $sport['Nom'] ?></td>
                                        <td><?php echo $sport['Poids'] ?></td>
                                        <td><?php echo $sport['Duree'] ?></td>
                                        <td><?php echo $sport['NbrJours'] ?></td>
                                        <td><a style="margin-left: -30px;" onclick="openModal(<?php echo $index; ?>)"><i class="icon-file  menu-icon "></i></a>
                                        <a href="<?php echo site_url('adminController/SupprimerSport') ?>?IdSport=<?php echo $sport['Id'] ?>"><i class="icon-trash  menu-icon "></i></a></td>
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
<div id="myModal" class="modal">
    <div class="col-md-9 grid-margin stretch-card" style="margin-left: 22%; margin-top: 5%;">
        <div class="card">
            <div class="card-body">
                <div class="card-body">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <form class="form-sample" action="<?php echo site_url('adminController/ModifSport'); ?>" method="get">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nom du sport</label>
                                <div class="col-sm-9">
                                    <input type="text" name="Nom" class="form-control" id="nom" />
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">duree</label>
                                <div class="col-sm-9">
                                    <input type="text" name="Duree" class="form-control" id="duree" />
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Poids</label>
                                <div class="col-sm-9">
                                    <input type="text" name="Poids" class="form-control" id="poids" />
                                </div>
                                </div>
                            </div>
                            <input type="hidden" name="IdSport" id="idSport">
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
    function openModal(index) {
        selectedRowData = <?php echo json_encode($Sport); ?>[index]; 

        var modalInput = document.getElementById("nom");
        modalInput.value = selectedRowData.Nom;
        var modalInput1 = document.getElementById("duree");
        modalInput1.value = selectedRowData.Duree;
        var modalInput2 = document.getElementById("poids");
        modalInput2.value = selectedRowData.Poids;
        var modalInput3 = document.getElementById("idSport");
        modalInput3.value = selectedRowData.Id; 

        document.getElementById("myModal").style.display = "block";
    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target === document.getElementById("myModal")) {
            closeModal();
        }
    }
</script>
</body>
</html>
