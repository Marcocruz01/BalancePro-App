<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance Pro | <?php echo $titulo;?> </title>
    <!-- Descripción SEO -->
    <meta name="description" content="Balance Pro es una aplicación web bancaria para registrar, monitorear y gestionar tus ingresos y gastos de manera fácil y segura.">
    <meta name="keywords" content="Balance Pro, app bancaria, ingresos, gastos, finanzas personales, control financiero, gestión de dinero">
    <meta name="author" content="Balance Pro">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Balance Pro | Gestiona tus finanzas">
    <meta property="og:description" content="Balance Pro te permite registrar y controlar tus ingresos y gastos de manera segura.">
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/css/output.css">
    <link rel="stylesheet" href="/dist/css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <?php echo $contenido; ?>
    <?php echo $script ?? ''; ?>
</body>
</html>