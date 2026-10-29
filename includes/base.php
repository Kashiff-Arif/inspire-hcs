<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <meta charset="UTF-8">

       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

    <title>Inspire HCS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Instrument+Sans:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">

    <meta
        name="description"
        content="Inspire HCS"
    >

    <meta name="robots" content="index, follow">

    <!-- Canonical -->
    <link rel="canonical" href="https://www.example.com/">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Inspire HCS">
    <meta
        property="og:description"
        content="Inspire HCS."
    >
    <meta property="og:url" content="https://www.example.com/">
    <meta property="og:image" content="https://phpstack-459561-1439636.cloudwaysapps.com/clients/inspire-hcs/src/images/logo-light.png">
    <meta property="og:image:alt" content="Inspire HCS">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="src/images/fav.png">

    <!-- Styles -->
    <link rel="stylesheet" href="src/dist/main.min.css?v=<?php echo time(); ?>">


</head>

<?php

$pageClass = "";

if (isset($ishome)) {
    $pageClass .= " front-page";
}

if (isset($issteps)) {
    $pageClass .= " steps-form";
}


?>

<body class="<?php echo trim($pageClass); ?>">

    

    <?php include_once "includes/svg-icons.php"; ?>

    <main>