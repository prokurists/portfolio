<?php
session_start();
?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/css/uikit.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="style.css">
</head>
<html>

<body>

    <?php
    if ($_SESSION["admin"]) {
        echo "admin content";
    } else { ?>
        <div class="uk-width-1-1">
            <div class="uk-position-center">
                <form action="controller/api.php" onsubmit="postRequest(event, this, adminLogin);">
                    <h1 class="uk-heading-line"><span>Admin page </span></h1>

                    <div class="uk-margin">
                        <div class="uk-inline uk-width-1-1">
                            <a class="uk-form-icon" href="#" uk-icon="icon: pencil"></a>
                            <input class="uk-input" id="email" type="email" name="email">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <div class="uk-inline uk-width-1-1">
                            <a class="uk-form-icon " href="#" uk-icon="icon: lock"></a>
                            <input class="uk-input" id="password" type="password" name="password">
                        </div>
                    </div>
                    <button type="submit" class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom">LOGIN</button>
                    <a class="uk-link-muted" href="www.pavlovs.lv">Back to page</a>

                </form>
            </div>
        </div>
    <?php
    }

    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit-icons.min.js"></script>
<script src="javascript.js"></script>

</html>