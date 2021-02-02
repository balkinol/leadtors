<?php 
    $title = 'Contacs';
    include './component/header.php'; 
?>
<div class="content">
    <div class="row">
        <div class="col-sm-12 col-lg-6 col-xl-4">
            <div class="contact-list1 container-fluid border bg-white mb-3">
                <div class="row">
                    <div class="col-6">
                        <div id="contact-thumbnail"></div>
                    </div>
                    <div class="col-6 pb-4">
                        <h3>DENNIS CANLAS</h3>
                        <small><i class="nc-icon nc-square-pin"></i> HOUSE BLK23 LO33, VALLEY 1</small> <br>
                        <small><i class="nc-icon nc-quote"></i> +321-123-123</small> <br>
                        <small><i class="nc-icon nc-email-85"></i>TEST@TEST.COM</small> <br><br>
                
                        <a href="#" class="mt-3 btn btn-outline-danger">VIEW PROFILE</a>
                
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-4">
            <div class="contact-list2 container-fluid border bg-white mb-3">
                <div class="row">
                    <div class="col-6">
                        <div id="contact-thumbnail"></div>
                    </div>
                    <div class="col-6 pb-4">
                        <h3>DENNIS CANLAS</h3>
                        <small><i class="nc-icon nc-square-pin"></i> HOUSE BLK23 LO33, VALLEY 1</small> <br>
                        <small><i class="nc-icon nc-quote"></i> +321-123-123</small> <br>
                        <small><i class="nc-icon nc-email-85"></i>TEST@TEST.COM</small> <br><br>
                
                        <a href="#" class="mt-3 btn btn-outline-danger">VIEW PROFILE</a>
                
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-4">
            <div class="contact-list3 container-fluid border bg-white mb-3">
                <div class="row">
                    <div class="col-6">
                        <div id="contact-thumbnail"></div>
                    </div>
                    <div class="col-6 pb-4">
                        <h3>DENNIS CANLAS</h3>
                        <small><i class="nc-icon nc-square-pin"></i> HOUSE BLK23 LO33, VALLEY 1</small> <br>
                        <small><i class="nc-icon nc-quote"></i> +321-123-123</small> <br>
                        <small><i class="nc-icon nc-email-85"></i>TEST@TEST.COM</small> <br><br>
                
                        <a href="#" class="mt-3 btn btn-outline-danger">VIEW PROFILE</a>
                
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-4">
            <div class="contact-list4 container-fluid border bg-white mb-3">
                <div class="row">
                    <div class="col-6">
                        <div id="contact-thumbnail"></div>
                    </div>
                    <div class="col-6 pb-4">
                        <h3>DENNIS CANLAS</h3>
                        <small><i class="nc-icon nc-square-pin"></i> HOUSE BLK23 LO33, VALLEY 1</small> <br>
                        <small><i class="nc-icon nc-quote"></i> +321-123-123</small> <br>
                        <small><i class="nc-icon nc-email-85"></i>TEST@TEST.COM</small> <br><br>
                
                        <a href="#" class="mt-3 btn btn-outline-danger">VIEW PROFILE</a>
                
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-4">
            <div class="contact-list5 container-fluid border bg-white mb-3">
                <div class="row">
                    <div class="col-6">
                        <div id="contact-thumbnail"></div>
                    </div>
                    <div class="col-6 pb-4">
                        <h3>DENNIS CANLAS</h3>
                        <small><i class="nc-icon nc-square-pin"></i> HOUSE BLK23 LO33, VALLEY 1</small> <br>
                        <small><i class="nc-icon nc-quote"></i> +321-123-123</small> <br>
                        <small><i class="nc-icon nc-email-85"></i>TEST@TEST.COM</small> <br><br>
                
                        <a href="#" class="mt-3 btn btn-outline-danger">VIEW PROFILE</a>
                
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6 col-xl-4">
            <div class="contact-list6 container-fluid border bg-white mb-3">
                <div class="row">
                    <div class="col-6">
                        <div id="contact-thumbnail"></div>
                    </div>
                    <div class="col-6 pb-4">
                        <h3>DENNIS CANLAS</h3>
                        <small><i class="nc-icon nc-square-pin"></i> HOUSE BLK23 LO33, VALLEY 1</small> <br>
                        <small><i class="nc-icon nc-quote"></i> +321-123-123</small> <br>
                        <small><i class="nc-icon nc-email-85"></i>TEST@TEST.COM</small> <br><br>
                
                        <a href="#" class="mt-3 btn btn-outline-danger">VIEW PROFILE</a>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include './component/footer.php'; ?>

<script>
    $(document).ready(function() {
        let pl =  document.querySelector('.contact-list1');
        pl.classList.add('animated', 'bounceInRight');
        
        pl =  document.querySelector('.contact-list2');
        pl.classList.add('animated', 'bounceInRight');
        
        pl =  document.querySelector('.contact-list3');
        pl.classList.add('animated', 'bounceInRight');
        
        pl =  document.querySelector('.contact-list4');
        pl.classList.add('animated', 'bounceInRight');
        
        pl =  document.querySelector('.contact-list5');
        pl.classList.add('animated', 'bounceInRight');

        pl =  document.querySelector('.contact-list6');
        pl.classList.add('animated', 'bounceInRight');
    });
</script>