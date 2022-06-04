<?php
include_once '../vendor/autoload.php';
\App\Session::init();


if (!(\App\Session::get('login') and \App\Session::get('user_type_id') == 1)) {

    header('location:../login.php');
}


///\App\Session::set('location', '../index.php');

$profile = new \App\User\User();

$profile_id = \App\Session::get('profile_id');



if (isset($_GET['active'])) {

    $ok = $profile->toggleActiveStatus(1, $_GET['active']);

    header('location:./show_member.php');
    //$ok = 1;
}
if (isset($_GET['inactive'])) {
    $ok =  $profile->toggleActiveStatus(0, $_GET['inactive']);
    header('location:./show_member.php');
    //$ok = 1;  
}
//getAllprofilelists($profile_type_id,,$companyID,$applicationID,$status)
$user_lists = $profile->getAllprofilelists(100);



include_once('../view/includes/header.php');

?>

<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Show Members</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="view/index.php">Dashboard</a></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default card-view">
                    <div class="panel panel-default card-view">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h5 class="txt-dark">Member Lists</h5>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                        <div class="panel-wrapper collapse in">
                            <div class="panel-body">

                                <?php if (isset($ok)) { ?>
                                    <div class="alert alert-success alert-dismissible">

                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <?php echo "Profile status Updated Successfully !!" ?>
                                    </div>
                                    <!-- <script>
									   alertify.set('notifier','position', 'top-center');
									   alertify.success('Client Status has Changed');
									</script> -->
                                <?php } ?>

                                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th style="width:20%">Full Name</th>
                                            <th style="width:15%">Display Name</th>
                                            <th style="width:11%">Email</th>
                                            <th style="width:11%">Phone</th>
                                            <th style="width:10%">Status</th>
                                            <th style="width:10%">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($user_lists)) {
                                            $cnt = 1;
                                            foreach ($user_lists as $res) { ?>
                                                <tr>
                                                    <td><?php echo $cnt ?></td>
                                                    <td><?php echo $res->FullName ?></td>
                                                    <td> <?php echo $res->DisplayName ?></td>
                                                    <td> <?php echo $res->Email ?></td>
                                                    <td> <?php echo $res->PrimaryMobile ?></td>
                                                    <td>
                                                        <input type="checkbox" <?= $res->status == 1 ? 'checked' : '' ?> data-id="<?= $res->profile_id ?>" class="js-switch js-switch-1 change_status" data-size="small" data-color="#469408" />
                                                    </td>
                                                    <td>

                                                        <a class="btn btn-success" title="Send To Trash List" href="" onclick="return confirm('Do you really want to Send to Trash ?');"><i class="zmdi zmdi-delete"></i></a>


                                                        <a class="btn btn-success" href="" title="Edit Profile"><i class="zmdi zmdi-edit"></i></a>

                                                        <a href="./view/member_details.php?id=<?php echo $res->profile_id; ?>"><i class="zmdi zmdi-eye btn btn-success small-button" title="View Member Profile"></i></a>
                                                    </td>

                                                </tr>
                                        <?php
                                                $cnt++;
                                            }
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row-->



        <?php
        include_once('../view/includes/footer.php');
        ?>


        <script>
            /* function toggleClientStatus(clientID, clientStatus){
            var message = "";
            if (clientStatus == 0){
                message = "Do you really want to remove client from Active Status ?";
                //alert("hmm");
            }else{
                message = "Do you really want to change client Status to Active ?";
            }

            alertify.confirm('Confirm', message, function(){
                    $.ajax({
                        type:'post',
                        url:'view/ajax-files/activestatus.php',
                        data:{
                            'clientID':clientID,
                            'clientStatus':clientStatus
                        },
                        success: function(data){
                            alertify.set('notifier','position', 'top-center');
                            if (data == 'ok'){
                                alertify.success('Client status has changed !!');
                            }
                            //window.location.reload();
                        },
                        
                    })
                },

              function () {}
                
            );
        }
    */

            $('#zctb').dataTable({
                language: {
                    searchPlaceholder: "Search"
                }
            })




            $('.change_status').on('change', function() {
                var id = $(this).attr('data-id');
                $.ajax({
                    type: 'post',
                    url: 'view/ajax-request-files/user_status.php',
                    data: {
                        'profile_id': id,
                        'change_status': 1
                    },
                    success: function(data) {
                        alertify.success("Status successfully changed !!")
                        // setTimeout(function() {
                        //     window.location.reload()
                        // }, 2000)
                    },
                })
            })
        </script>