<section style="margin: 0px;margin-top: 24px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5 col-xl-4 offset-xl-0">
                    <div>
                        <h5 class="text-center" style="color: rgb(7,43,69);">
                            <strong>Waiting</strong>
                        </h5>
                        <div style="height: 122px;background: #f1f7ff;border-radius: 25;box-shadow: 9px 6px 20px 0px rgba(44,44,44,0.23);margin-top: 32px;padding-left: 10%;padding-top: 2%;"><img class="float-end" style="margin-right: 4%;">
                            <p style="width: 50%;color: rgb(7,43,69);font-weight: bold;">Nom Produit</p>
                            <p style="width: 50%;color: rgb(7,43,69);font-weight: bold;">Description</p>
                            <p class="text-center float-end" style="width: 50%;color: rgb(7,43,69);font-weight: bold;">Prix</p>
                            <p style="width: 50%;color: rgb(7,43,69);font-weight: bold;">Etat</p>
                        </div>
                        <div style="height: 122px;background: #f1f7ff;border-radius: 25;box-shadow: 9px 6px 20px 0px rgba(44,44,44,0.23);margin-top: 32px;padding-left: 10%;padding-top: 2%;"><img class="float-end" style="margin-right: 4%;">
                            <p style="width: 50%;color: rgb(7,43,69);font-weight: bold;">Nom Produit</p>
                            <p style="width: 50%;color: rgb(7,43,69);font-weight: bold;">Description</p>
                            <p class="text-center float-end" style="width: 50%;color: rgb(7,43,69);font-weight: bold;">Prix</p>
                            <p style="width: 50%;color: rgb(7,43,69);font-weight: bold;">Etat</p>
                        </div>
                        <div style="height: 122px;background: #f1f7ff;border-radius: 25;box-shadow: 9px 6px 20px 0px rgba(44,44,44,0.23);margin-top: 32px;padding-left: 10%;padding-top: 2%;"><img class="float-end" style="margin-right: 4%;">
                            <p style="width: 50%;color: rgb(7,43,69);font-weight: bold;">Nom Produit</p>
                            <p style="width: 50%;color: rgb(7,43,69);font-weight: bold;">Description</p>
                            <p class="text-center float-end" style="width: 50%;color: rgb(7,43,69);font-weight: bold;">Prix</p>
                            <p style="width: 50%;color: rgb(7,43,69);font-weight: bold;">Etat</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 offset-lg-0 offset-xl-1">
                    <div>
                        <h5 class="text-center" style="color: rgb(7,43,69);">
                            <strong>Object Able</strong>
                        </h5>
                        <?php if(isset($listeObjet))
                        {
                          foreach ($listeObjet as $Objet) { ?> 
                        <div style="height: 190px;background: #f5f5f5;border-radius: 10;box-shadow: 9px 6px 20px 0px rgba(44,44,44,0.21);margin-top: 32px;padding-left: 10%;padding-top: 1%;"><img class="float-end" style="margin-right: 4%;">
                         
                            <p style="width: 50%;color: rgb(7,43,69);"><?php echo $Objet['nomObjet']?></p>
                            <p style="width: 50%;color: rgb(7,43,69);"><?php echo $Objet['descrit']?></p>
                            <p class="text-center float-end" style="width: 50%;color: rgb(7,43,69); margin-top:-87px;"><img width="35%" src="<?php echo base_url();?><?php echo $Objet['photo']?>"></p>
                            <p style="width: 50%;color: rgb(255, 43, 78);font-weight: bold; ">$<?php echo $Objet['prix']?></p>
                            <p><button style=" width:100px; height: 30px; color:white; border-radius: 15px;border:none ;background-color: rgb(255, 43, 78);">Echanger</button></p>
                        </div>
                         <?php }
                          }?>
                    </div>
                </div>
            </div>
        </div>
    </section>