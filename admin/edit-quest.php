<?php
require '../constants/config.php';
require '../constants/check-login.php';

$question_id = $_GET['node'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $stmt = $conn->prepare("SELECT * FROM tbl_faqs WHERE id = :id");
    $stmt->bindParam(':id', $question_id);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach($result as $row)
    {
        $ques = $row['quest'];
        $answ = $row['answ'];

    }
                      
    }catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


if ($logged == "1") {
       if ($myrole == "admin") {

       }else{

        header("location:../");

       }

    }else{

        header("location:../");

    }


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $site_title; ?> - Edit Question</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="../assets/icon/favicon.ico">
        <link rel="stylesheet" href="summernote/dist/summernote.css" />
    <link rel="stylesheet" href="summernote/dist/summernote-bs3.css" />
    <link rel="icon" type="image/x-icon" href="icon/rwandaicon.png">


</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a target="_blank" class="navbar-brand" href="../"><?php echo $site_title; ?></a>
            </div>
        

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $myusername; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="account"><i class="fa fa-gear fa-fw"></i> Account Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>

                </li>

            </ul>
           

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="./"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="pub-ads"><i class="fa fa-edit fa-fw"></i> Published Post</a>
                        </li>
                        <li>
                            <a href="active-ads"><i class="fa fa-check-circle-o fa-fw"></i> Active Post</a>
                        </li>
                        <li>
                            <a href="pending-ads"><i class="fa fa-spinner fa-fw"></i> Pending Post</a>
                        </li>
                        <li>
                            <a href="featured-ads"><i class="fa fa-star-o fa-fw"></i> Featured Post</a>
                        </li>
                        <li>
                            <a href="users"><i class="fa fa-users fa-fw"></i> Users</a>
                        </li>
                        <li>
                            <a href="account"><i class="fa fa-cog fa-fw"></i> Account Settings</a>
                        </li>
                        <li>
                            <a href="faq"><i class="fa fa-question-circle fa-fw"></i> FAQ</a>
                        </li>
                        <li>
                            <a href="about"><i class="fa fa-info-circle fa-fw"></i> About</a>
                        </li>
                         <li>
                            <a href="../logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>

                    </ul>
                </div>
              
            </div>
        
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Edit Question</h4>
                    <?php require 'constants/check-reply.php'; ?>
                    <form action="app/update-qu.php" method="POST" autocomplete="off">
                    <div class="form-group">
                    <label>Question</label>
                    <input class="form-control" name="question" value="<?php echo $ques; ?>" required>
                
                    </div>
                    <textarea id="summernote" name="about" required>
                      <?php echo $answ; ?>
                    </textarea>
                    <input type="hidden" value="<?php echo $question_id; ?>" name="id">
                    <button type="submit" class="btn btn-default">Save</button><br><br>
                </form>
                </div>


            </div>
         
            <div class="row">

            </div>

        </div>

    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>
    <script src="summernote/dist/summernote.min.js"></script>
    
<script>
    $('#summernote').summernote();

    $(function () {

        $('.summernote').summernote();

        $('.summernote1').summernote({
            toolbar: [
                ['headline', ['style']],
                ['style', ['bold', 'italic', 'underline', 'superscript', 'subscript', 'strikethrough', 'clear']],
                ['textsize', ['fontsize']],
                ['alignment', ['ul', 'ol', 'paragraph', 'lineheight']],
            ]
        });

        $('.summernote2').summernote({
            airMode: true,
        });

    });

</script>

</body>

</html>
