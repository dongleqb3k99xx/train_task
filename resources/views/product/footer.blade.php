    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
        function doAddCart(idProduct) {
            $.ajax({
                method: 'get',
                url: 'doAddCart?id='+idProduct,
                async: true,
                success: function(response){
                    document.getElementById('txtNumberCart').innerHTML = response;
                },
                error: function(data){
                    console.log(data);
                    
                },
            });
        }
    </script>
</body>

</html>
