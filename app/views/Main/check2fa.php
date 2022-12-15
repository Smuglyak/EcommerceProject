<html>

<head>
    <title><?= _("2fa Check") ?></title>
</head>

<body>
    <p><?= _("Hi") ?> <?= gettext($_SESSION['username']) ?>. <?= _("Provide your 2-factor authentication code") ?>. </p>
    <form method="post" action="">
        <label><?= _("Current code:") ?><input type="text" name="currentCode" /></label>
        <input type="submit" name="action" value="Verify code" />
    </form>
</body>

</html>