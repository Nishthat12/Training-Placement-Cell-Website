<?php
echo "Your application was rescinded successfully.<br>
You will be redirected to your dashboard shortly...";
?>
<script>
setTimeout(function() {
    window.location.href = "welcome_student.php";
}, 5000);

</script>