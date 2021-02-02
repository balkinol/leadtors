<?php 
    $title = 'Dashboard';
    include './component/header.php'; 
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div id="bg1" class="bg mb-2 mr-2">
                    <i class="bg-icon nc-icon nc-square-pin"></i>
                    <div class="bg-container">
                        <span class="bg-counter">24</span><br>
                        <span class="bg-label">PROPERTIES</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div id="bg2" class="bg mb-2 mr-2">
                    <i class="bg-icon nc-icon nc-map-big"></i>
                    <div class="bg-container">
                        <span class="bg-counter">5</span><br>
                        <span class="bg-label">LOCATION</span>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-lg-6">
                <div id="bg3" class="bg mb-2 mr-2">
                    <i class="bg-icon nc-icon nc-single-02"></i>
                    <div class="bg-container">
                        <span class="bg-counter">324</span><br>
                        <span class="bg-label">CONTACTS</span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div id="bg4" class="bg mb-2 mr-2">
                    <i class="bg-icon nc-icon nc-album-2"></i>
                    <div class="bg-container">
                        <span class="bg-counter">15</span><br>
                        <span class="bg-label">SCHEDULES</span>
                    </div>
                </div>
            </div>


        </div>


    
        <div class="row">
            <div class="col-12 col-lg-4">
                <div id="bg5" class="card">
                    <div class="card-header ">
                        <h4 class="card-title">Schedule Statistics</h4>
                        <p class="card-category">Campaign Performance</p>
                    </div>
                    <div class="card-body ">
                        <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                        <div class="legend">
                            <i class="fa fa-circle text-info"></i> Success
                            <i class="fa fa-circle text-danger"></i> Re-Schdule
                            <i class="fa fa-circle text-warning"></i> Cancel
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div id="bg6" class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Schedules</h4>
                        <p class="card-category">24 Hours performance</p>
                    </div>
                    <div class="card-body ">
                        <div id="chartHours" class="ct-chart"></div>
                    </div>
                    <div class="card-footer ">
                        <div class="legend">
                            <i class="fa fa-circle text-info"></i> Success
                            <i class="fa fa-circle text-danger"></i> Re-Schdule
                            <i class="fa fa-circle text-warning"></i> Cancel
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Updated 3 minutes ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="bg6" class="col-12 col-lg-6">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Inquiry</h4>
                        <p class="card-category">Total number for this month</p>
                    </div>
                    <div class="card-body ">
                        <div id="chartActivity" class="ct-chart"></div>
                    </div>
                    <div class="card-footer ">
                        <div class="legend">
                            <i class="fa fa-circle text-info"></i> New
                            <i class="fa fa-circle text-danger"></i> Return
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-check"></i> Data information certified
                        </div>
                    </div>
                </div>
            </div>
            <div  id="bg7" class="col-12 col-lg-6">
                <div class="card  card-tasks">
                    <div class="card-header ">
                        <h4 class="card-title">Today Schedule</h4>
                        <p class="card-category">List of schedule</p>
                    </div>
                    <div class="card-body ">
                        <div class="table-full-width">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" checked>
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Read "Following makes Medium better"</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" value="" disabled>
                                                    <span class="form-check-sign"></span>
                                                </label>
                                            </div>
                                        </td>
                                        <td>Unfollow 5 enemies from twitter</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include './component/footer.php'; ?>


<script>
    $(document).ready(function() {
        demo.initDashboardPageCharts();
        let bg1 =  document.querySelector('#bg1');
        bg1.classList.add('animated', 'bounceInLeft');

        let bg2 =  document.querySelector('#bg2');
        bg2.classList.add('animated', 'bounceInRight');

        let bg3 =  document.querySelector('#bg3');
        bg3.classList.add('animated', 'bounceInLeft');

        let bg4 =  document.querySelector('#bg4');
        bg4.classList.add('animated', 'bounceInRight');

        let bg5 =  document.querySelector('#bg5');
        bg5.classList.add('animated', 'bounceInLeft');

        let bg6 =  document.querySelector('#bg6');
        bg6.classList.add('animated', 'bounceInRight');

        let bg7 =  document.querySelector('#bg7');
        bg7.classList.add('animated', 'bounceInLeft');

        let bg8 =  document.querySelector('#bg8');
        bg8.classList.add('animated', 'bounceInRight');
    });
</script>