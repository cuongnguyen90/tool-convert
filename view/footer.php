<script>
    function confirmDelete(object) {
        let data = object.getAttribute('data-id');
        confirm = document.getElementById('confirm-delete');
        confirm.href = '?mode=products&action=delete&id=' + data
    }
</script>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>