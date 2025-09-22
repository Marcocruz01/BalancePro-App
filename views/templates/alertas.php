<?php if(!empty($alertas['error'])): ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Algo salió mal...',
            text: '<?php echo reset($alertas['error']); ?>',
            confirmButtonText: 'OK',
            confirmButtonColor: '#d33',
            showCloseButton: true    
        });
    </script>
<?php elseif(!empty($alertas['success'])): ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Operación exitosa!',
            text: '<?php echo reset($alertas['success']); ?>',
            <?php if (!empty($redirigir) && $redirigir): ?>
                timer: 3500,
                timerProgressBar: true,
                showConfirmButton: false,
            <?php else : ?>
                confirmButtonText: 'OK',
                confirmButtonColor: '#007bff',
                showCloseButton: true    
            <?php endif; ?>
        })
        <?php if (!empty($redirigir) && $redirigir): ?>
        .then(() => {
            window.location.href = "/login";
        });
        <?php endif; ?>
    </script>
<?php endif; ?>