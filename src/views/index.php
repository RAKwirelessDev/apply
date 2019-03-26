<!DOCTYPE html>
<html lang="en">

<?php Core\ViewsHandler::yield('snippets/html.head.php'); ?>

<body class="bg-light">
    <div class="container">

        <?php Core\ViewsHandler::yield('snippets/page.head.php'); ?>

        <div class="row">

            <?php Core\ViewsHandler::yield('snippets/page.right.sidebar.php'); ?>
            <?php Core\ViewsHandler::yield('snippets/page.form.body.php'); ?>

        </div>
        <?php Core\ViewsHandler::yield('snippets/page.foot.php'); ?>
    </div>
    <?php Core\ViewsHandler::yield('snippets/html.foot.php'); ?>
</body>

</html>