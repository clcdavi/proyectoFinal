<footer>
    <div class="container-fluid">

        <div class="row">

            <div class="col-12 d-flex justify-content-between border">
        
                <div class="nav-link">
                    <a class="nav-item nav-link border border-primary rounded-lg p-0" href="index.php?m=index">Home</a>
                    <a class="nav-item nav-link border border-primary rounded-lg p-0" href="#">Help</a>
                    
                </div>

                <div class="nav-link mt-1">


                        <?php 
                    if ( !isset($_SESSION["usuario"]) ){ ?>

                        <div>

                            <a data-toggle="modal" data-target="#exampleModalR" class="nav-link border border-dark rounded-lg bg-light" href="">Formá parte de Cool San Fernando</a>

                        </div>
                    <?php 
                    }
                    else{
                    ?>
                        <div>

                            <a class="nav-link border border-dark rounded-lg bg-light" href="index.php?m=pubs&a=new">Formá parte de Cool San Fernando</a>
                            
                        </div>

                    <?php 
                    }
                    ?>
                    
                </div>
                    
                <div class="nav-link">
                            
                    <a class="nav-item nav-link border border-primary rounded-lg p-0" href="http://www.comunidadit.org/" >Comunidad It</a>

                    <a class="nav-item nav-link border border-primary rounded-lg p-0" href="https://hogares.telecom.com.ar/" >Telecom</a>

                </div>


            </div>

        </div>
    </div>
</footer>