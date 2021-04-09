<?php declare(strict_types=1) ?>
<?php
$shib_handler = filter_input(INPUT_SERVER, 'Shib-Handler', FILTER_SANITIZE_STRING);
$hostname = filter_input(INPUT_SERVER, 'SERVER_NAME', FILTER_SANITIZE_STRING);
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="Center for Causal Discovery" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>PHP SAML SP Demo</title>
        <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../vendor/fontawesome/css/all.min.css" />
    </head>
    <body>
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
            <a class="navbar-brand my-0 mr-md-auto" href="/secure">PHP SAML 2.O Service Provider Demo</a>
            <form action="<?php echo "${shib_handler}/Logout?return=https://${hostname}/logout.php" ?>" method="post">
                <input class="btn btn-outline-primary" type="submit" value="Sign Out"/>
            </form>
        </div>
        <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h1 class="display-4">Congratulations!</h1>
            <p class="lead">You're signed in.</p>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">User Attributes</div>
                        <div class="card-body">
                            <table class="table table-sm table-borderless table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Attribute</th>
                                        <th scope="col">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>uid</td>
                                        <td><?php echo filter_input(INPUT_SERVER, 'uid', FILTER_SANITIZE_STRING); ?></td>
                                    </tr>
                                    <tr>
                                        <td>eduPersonPrincipalName</td>
                                        <td><?php echo filter_input(INPUT_SERVER, 'eduPersonPrincipalName', FILTER_SANITIZE_STRING); ?></td>
                                    </tr>
                                    <tr>
                                        <td>mail</td>
                                        <td><?php echo filter_input(INPUT_SERVER, 'mail', FILTER_SANITIZE_STRING); ?></td>
                                    </tr>
                                    <tr>
                                        <td>givenName</td>
                                        <td><?php echo filter_input(INPUT_SERVER, 'givenName', FILTER_SANITIZE_STRING); ?></td>
                                    </tr>
                                    <tr>
                                        <td>sn</td>
                                        <td><?php echo filter_input(INPUT_SERVER, 'sn', FILTER_SANITIZE_STRING); ?></td>
                                    </tr>
                                    <tr>
                                        <td>displayName</td>
                                        <td><?php echo filter_input(INPUT_SERVER, 'displayName', FILTER_SANITIZE_STRING); ?></td>
                                    </tr>
                                    <tr>
                                        <td>eduPersonAffiliation</td>
                                        <td><?php echo filter_input(INPUT_SERVER, 'eduPersonAffiliation', FILTER_SANITIZE_STRING); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../vendor/jquery/jquery-3.5.1.slim.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
