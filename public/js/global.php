<script type="module">
    if (!localStorage.getItem("_")) {
        let res = await fetch("<?php echo $ROOTURL ?>visitor.php")
        if (res.ok) {
            localStorage.setItem("_", true)
        }
    }
</script>